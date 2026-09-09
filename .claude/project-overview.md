# FiloSchool Marketplace — Affiliate System Development Prompt

## Objective

Implement **only an Affiliate System** inside the existing FiloSchool Marketplace.

The existing Marketplace already has:

* Users
* Products
* Product pages
* Orders
* Checkout
* Payments
* Payment confirmation/status handling
* Admin panel
* User profile/dashboard

**Do NOT create a new product, order, checkout, or payment system.**

The affiliate system must integrate with the existing Marketplace infrastructure and should only add:

**Affiliate → Unique Link → Referral Tracking → Sale Identification → Commission Calculation → Commission Record → Affiliate/Admin Management**

The initial affiliate commission should be **5%**, but the percentage must be configurable from the database so it can be changed later without modifying application code.

---

# 1. Affiliate Eligibility

Any registered/active user on the platform should be able to become an affiliate for an individual product.

A user does NOT need to become a global affiliate before promoting products.

The relationship should be:

```text
User
  ↓
Affiliate Product
  ↓
Unique Affiliate Link
  ↓
Referral
  ↓
Order
  ↓
Commission
```

A user can promote multiple products.

A product can be promoted by multiple users.

Example:

```text
User A → Product 123
User B → Product 123
User C → Product 123
```

Each user/product combination must have its own unique affiliate link.

---

# 2. Product Page

On each eligible product page, add an option such as:

**"Promote this product and earn 5%"**

or:

**"Become an Affiliate — Earn 5%"**

The displayed percentage must come from the database/configuration rather than being hardcoded.

When the logged-in user clicks this option:

1. Check whether the user is authenticated.
2. Check whether the user is allowed to participate in the affiliate program.
3. Check whether the user has already created an affiliate record for this product.
4. If already created, return the existing affiliate link.
5. Otherwise create a new affiliate-product relationship.
6. Generate a unique referral code.
7. Return/display the affiliate URL.

Example:

```text
https://filoschool.com/product/123?ref=USR456
```

The actual referral code should be generated securely and should be unique.

Do not use the user's database ID directly unless the existing architecture specifically requires it.

Prefer something like:

```text
FS-A8K92X
```

or another secure unique identifier.

---

# 3. Database Design

Add only the database tables/columns required for the affiliate functionality.

Do not duplicate existing users, products, orders, or payments.

## Suggested table: affiliates

Create an `affiliates` table representing a user's affiliate relationship with a product.

Suggested fields:

```text
id
user_id
product_id
referral_code
status
commission_rate
created_at
updated_at
```

Where:

```text
user_id       → existing users table
product_id    → existing products table
referral_code → unique affiliate referral code
status        → active/suspended
commission_rate → initial value 5.00
```

Add an appropriate unique constraint, for example:

```text
UNIQUE(user_id, product_id)
```

and:

```text
UNIQUE(referral_code)
```

The exact field names should follow the existing FiloSchool coding/database conventions.

---

# 4. Commission Configuration

Commission percentage must NOT be hardcoded in controllers/services.

Initially:

```text
5%
```

But it must be stored/configurable through the database.

Possible approach:

Create a setting/configuration record such as:

```text
affiliate_commission_rate = 5
```

or use an existing settings table if the Marketplace already has one.

If an existing settings/configuration mechanism exists, **reuse it instead of creating another settings system.**

The admin should be able to change:

```text
5%
→ 7%
→ 10%
→ etc.
```

without changing source code.

Important:

When a commission is created, store the actual commission rate used for that sale in the commission record.

For example:

```text
order_amount = 1000
commission_rate = 5
commission_amount = 50
```

If the admin later changes the rate to 10%, old commissions must remain at 5%.

---

# 5. Referral Tracking

When a customer visits:

```text
/product/123?ref=FS-A8K92X

```

the application must:

1. Read the `ref` parameter.
2. Validate the referral code.
3. Confirm that the affiliate exists.
4. Confirm that the affiliate is active.
5. Confirm that the affiliate belongs to the same product.
6. Record the referral/click.
7. Store the affiliate attribution temporarily so it survives navigation through the Marketplace and checkout.

The existing customer journey must remain unchanged.

Example:

```text
Affiliate URL
      ↓
Product page
      ↓
Add to cart
      ↓
Existing checkout
      ↓
Existing payment
      ↓
Existing order
```

Do not create a separate affiliate checkout.

---

# 6. Referral Attribution

The affiliate attribution must survive the customer's movement through the website.

Possible implementation:

```text
Session
```

or another existing tracking mechanism.

For example:

```text
affiliate_id
affiliate_product_id
referral_code
```

can be stored in the session after the customer lands through an affiliate link.

Make sure the attribution cannot accidentally be replaced by unrelated URLs.

The implementation should define a clear attribution rule.

Recommended default:

**Last valid affiliate referral wins before purchase.**

Example:

```text
Customer visits Product 123 from Affiliate A
↓
Affiliate A stored in session

Customer later visits Product 123 from Affiliate B
↓
Affiliate B replaces Affiliate A

Customer purchases
↓
Affiliate B receives commission
```

However, if the existing application already has an attribution mechanism, reuse it where appropriate.

---

# 7. Click Tracking

Each valid visit through an affiliate link should increment the affiliate's click count.

The affiliate dashboard must show:

```text
Clicks
```

Do not count invalid referral codes.

Avoid artificially creating multiple clicks for a single page request if the existing architecture has a suitable way to prevent obvious duplicate requests.

The click-tracking implementation should be lightweight and should not negatively affect product-page performance.

---

# 8. Existing Order Integration

Do NOT modify the existing order creation flow unnecessarily.

The current Marketplace order process must continue to work exactly as before.

The only addition should be affiliate attribution.

When an order is created or payment is confirmed, determine whether it has an associated affiliate referral.

The affiliate information should be associated with the existing order.

Possible approach:

Add an optional field to the existing orders table:

```text
affiliate_id
```

or use a separate affiliate-sale relationship table if that better matches the current architecture.

Do NOT create a duplicate order.

Do NOT create a second payment.

Do NOT create a second checkout.

---

# 9. Payment Confirmation

Commission must NOT be considered earned merely because the customer clicked the affiliate link.

Commission should be generated only after the existing payment system confirms that the order/payment was successfully paid.

Flow:

```text
Affiliate Link Click
        ↓
Referral Tracking
        ↓
Customer Places Existing Order
        ↓
Existing Payment Process
        ↓
Payment Successfully Confirmed
        ↓
Check Affiliate Attribution
        ↓
Calculate Commission
        ↓
Create Commission Record
```

If payment fails:

```text
No commission
```

If payment is cancelled:

```text
No commission
```

If payment remains pending:

```text
No approved/earned commission yet
```

Use the existing payment confirmation/webhook/status mechanism.

Do not create a new payment confirmation mechanism.

---

# 10. Commission Calculation

Initial commission rate:

```text
5%
```

Formula:

```text
commission = eligible_paid_amount × commission_rate / 100
```

Example:

```text
Product price = 1,000 MT
Commission rate = 5%

Commission = 1,000 × 5 / 100
Commission = 50 MT
```

Use the actual amount paid according to the existing Marketplace payment/order structure.

Do not blindly use the product's current price if the customer actually paid a different amount due to:

* Discount
* Coupon
* Tax
* Quantity
* Product variation
* Other existing Marketplace pricing rules

The commission calculation must follow the existing application's definition of the amount actually paid/eligible for commission.

---

# 11. Prevent Duplicate Commissions

The system must guarantee that the same order/payment cannot generate multiple commissions.

For example:

If a payment webhook is received multiple times:

```text
Webhook #1 → Commission created
Webhook #2 → Do NOT create another commission
Webhook #3 → Do NOT create another commission
```

Implement proper idempotency/unique constraints.

A commission should have a unique relationship with the relevant order/order-item/payment according to the existing Marketplace structure.

---

# 12. Commission Record

Create a dedicated commission table.

Suggested fields:

```text
id
affiliate_id
user_id
product_id
order_id
payment_id (nullable if not applicable)
commission_rate
sale_amount
commission_amount
status
created_at
updated_at
```

Suggested statuses:

```text
pending
approved
rejected
```

If needed, also support:

```text
cancelled
```

The exact naming should follow existing project conventions.

Important:

Store historical values:

```text
sale_amount
commission_rate
commission_amount
```

Do not calculate historical commission dynamically using the current commission percentage.

---

# 13. Commission Status

Recommended workflow:

```text
Payment Confirmed
      ↓
Commission Created
      ↓
Pending
      ↓
Admin Reviews
      ↓
Approved / Rejected
```

If the project already has business rules around refunds/cancellations, integrate affiliate commission status with those rules.

For example, if an order is refunded before commission approval, the commission should not remain incorrectly payable.

Do not invent a new payment/payout system unless specifically required.

This task is only about recording and managing affiliate commissions.

---

# 14. Affiliate Dashboard

Add a new section to the existing user profile/dashboard:

## Affiliate Program

The affiliate should be able to see:

### Products

Products currently being promoted.

Display information such as:

```text
Product
Commission %
Affiliate Link
Clicks
Sales
Sales Value
Commission
Status
```

### Affiliate Links

Show each generated affiliate link.

Example:

```text
Product: Product 123
Commission: 5%
Clicks: 125
Sales: 8
Sales Value: 8,000 MT
Commission: 400 MT

Affiliate Link:
https://filoschool.com/product/123?ref=FS-A8K92X
```

Provide a convenient **Copy Link** action.

---

# 15. Dashboard Statistics

Display summary cards:

```text
Total Clicks
Total Sales
Total Sales Value
Accumulated Commissions
Pending Commissions
Approved Commissions
```

Example:

```text
Total Clicks          1,250
Sales                 32
Sales Value           32,000 MT
Accumulated           1,600 MT
Pending               400 MT
Approved              1,200 MT
```

Use existing dashboard/UI components wherever possible.

Do not introduce a completely new frontend framework.

---

# 16. Commission History

The affiliate should be able to view commission history.

Example:

```text
Date
Product
Order
Sale Amount
Commission Rate
Commission
Status
```

Example:

```text
08 Sep 2026
Product ABC
Order #10234
1,000 MT
5%
50 MT
Approved
```

Allow pagination using the existing project conventions.

---

# 17. Admin Panel

Add an **Affiliate Program** section to the existing admin panel.

The admin should be able to:

### Affiliates

View all affiliates.

Display:

```text
Affiliate/User
Product
Referral Code
Clicks
Sales
Sales Value
Commission
Status
Created Date
```

---

# 18. Admin — Affiliate Details

Admin should be able to open an affiliate and see:

```text
Affiliate/User
Promoted Product
Affiliate Link
Referral Code
Clicks
Generated Sales
Total Sales Value
Total Commission
Pending Commission
Approved Commission
Status
```

---

# 19. Admin — Referral/Sale Details

Admin must be able to see which affiliate referred each sale.

Example:

```text
Order #10234
Product: Product ABC
Customer: Customer B
Affiliate: User A
Referral Code: FS-A8K92X
Sale Amount: 1,000 MT
Commission Rate: 5%
Commission: 50 MT
Status: Pending
```

The existing order should remain the source of truth.

---

# 20. Admin — Commission Management

Admin must be able to:

```text
View commissions
Approve commissions
Reject commissions
Filter by status
Filter by affiliate
Filter by product
Filter by date
```

When approving/rejecting a commission, store the appropriate status and timestamps according to project conventions.

---

# 21. Suspend Affiliate

Admin must be able to suspend an affiliate.

When suspended:

* Existing historical commissions must remain visible.
* Existing historical sales must remain intact.
* The affiliate should no longer receive new referrals/commissions.
* Affiliate links should no longer attribute new sales while suspended.

Do not delete historical affiliate data when suspending.

Prefer a status such as:

```text
active
suspended
```

---

# 22. Self-Referral Prevention

An affiliate must NOT be able to earn commission by purchasing their own promoted product through their own affiliate link.

Example:

```text
User A creates affiliate link
↓
User A opens own affiliate link
↓
User A purchases Product 123
↓
NO affiliate commission
```

Implement this validation at the point where the sale/commission is created.

---

# 23. Product Ownership / Seller Rules

Respect the existing Marketplace rules.

If a user is the seller/owner of a product and the existing Marketplace has restrictions around purchasing/promoting their own product, preserve those rules.

Do not create new Marketplace business rules unless necessary for affiliate functionality.

---

# 24. Multiple Products in One Order

Check how the existing Marketplace handles orders containing multiple products.

If one order can contain multiple products, affiliate attribution must be handled at the **product/order-item level** where necessary.

Example:

```text
Order #500

Product A → Affiliate User A
Product B → Affiliate User B
Product C → No Affiliate
```

Do not assume that an entire order belongs to one affiliate if the existing Marketplace supports multiple products per order.

Use the existing order-item structure if available.

---

# 25. Discounts / Taxes / Fees

Use the existing Marketplace's calculation rules.

Clearly determine the eligible commission amount.

Do not create independent pricing logic.

For example, if:

```text
Product price = 1,000 MT
Discount = 100 MT
Customer pays = 900 MT
Commission = 5%
```

then the commission should normally be based on the existing application's defined eligible paid amount, e.g.:

```text
900 × 5% = 45 MT
```

Follow the existing Marketplace business rules rather than hardcoding assumptions.

---

# 26. Security

The implementation must include:

* Authentication checks
* Authorization checks
* Ownership/access validation
* Secure referral codes
* Validation of referral codes
* Protection against duplicate commission creation
* Protection against self-referrals
* Protection against suspended affiliates generating commissions
* CSRF protection where applicable
* Existing API/web security standards
* Proper database foreign keys/indexes where supported

Users must only be able to access their own affiliate dashboard/data.

Admin-only operations must use the existing admin authorization system.

---

# 27. Performance

Affiliate tracking must have minimal impact on product-page performance.

Add appropriate database indexes for frequently queried fields such as:

```text
user_id
product_id
referral_code
status
order_id
affiliate_id
created_at
```

Use eager loading where appropriate to avoid N+1 queries.

Do not introduce unnecessary API requests.

---

# 28. Routes

Follow the existing route architecture.

Possible routes:

```text
POST /affiliate/products/{product}/create
GET  /affiliate/dashboard
GET  /affiliate/links
GET  /affiliate/commissions
```

Admin:

```text
GET    /admin/affiliates
GET    /admin/affiliates/{affiliate}
PATCH  /admin/affiliates/{affiliate}/status

GET    /admin/affiliate-commissions
PATCH  /admin/affiliate-commissions/{commission}/approve
PATCH  /admin/affiliate-commissions/{commission}/reject
```

These are examples only.

First inspect the existing route structure and follow the project's naming and middleware conventions.

---

# 29. Backend Architecture

Before implementing anything, inspect the existing codebase and identify:

* User model
* Product model
* Order model
* Order item model
* Payment model
* Payment confirmation logic
* Payment webhook handlers
* Checkout flow
* Existing dashboard structure
* Existing admin panel structure
* Existing settings/configuration system
* Existing authentication/authorization system

Then integrate the affiliate functionality into the correct existing services/controllers/events/listeners.

Prefer:

```text
Models
Migrations
Services
Events/Listeners
Policies
Requests/Validation
Controllers
```

according to the existing project's architecture.

Do not put all affiliate logic inside a single controller.

---

# 30. Payment Integration Requirement

This is extremely important:

**Do not modify or replace the existing payment system.**

Find the exact point where an existing order becomes successfully paid.

Hook affiliate commission creation into that existing event/process.

For example, if the existing application already has something like:

```text
PaymentCompleted
OrderPaid
PaymentSuccess
```

use that mechanism.

If no event exists, add a minimal integration point to the existing payment confirmation process.

Do NOT create:

```text
AffiliatePaymentController
AffiliateCheckoutController
AffiliateOrderController
```

unless absolutely necessary.

Affiliate functionality should be an extension of the existing payment/order lifecycle.

---

# 31. API / AJAX

If the existing Marketplace uses AJAX/API calls for frontend actions, follow the existing pattern.

For:

```text
Become an Affiliate
```

return something similar to:

```json
{
    "success": true,
    "affiliate_link": "https://filoschool.com/product/123?ref=FS-A8K92X"
}
```

If the affiliate already exists:

```json
{
    "success": true,
    "already_exists": true,
    "affiliate_link": "https://filoschool.com/product/123?ref=FS-A8K92X"
}
```

Follow the project's existing response format if it already has one.

---

# 32. UI Requirements

Keep the UI consistent with the existing FiloSchool Marketplace design.

On product page:

```text
[ Promote this product and earn 5% ]
```

After activation:

```text
Your Affiliate Link

https://filoschool.com/product/123?ref=FS-A8K92X

[ Copy Link ]
```

Do not redesign the product page.

Only add the required affiliate functionality.

---

# 33. Database Configuration Example

Initial configuration:

```text
affiliate_commission_rate = 5
```

The implementation should allow:

```text
5%
```

to later become:

```text
7%
```

or:

```text
10%
```

without code changes.

When a new affiliate relationship is created, save the current rate if the business rules require product-level rate locking.

When a commission is generated, always save:

```text
commission_rate
```

so historical commissions remain immutable.

---

# 34. Important Business Rule

The system must distinguish between:

### Affiliate Rate

The percentage configured for the affiliate/product.

### Commission Record

The actual commission generated from a completed sale.

For example:

```text
Configured Rate = 5%

Sale #1001
Sale Amount = 1,000 MT
Commission Rate = 5%
Commission = 50 MT
```

Later:

```text
Configured Rate = 10%
```

Sale #1001 must still remain:

```text
Commission Rate = 5%
Commission = 50 MT
```

It must NOT automatically change to 100 MT.

---

# 35. Testing Requirements

Create tests for at least the following scenarios.

### Test 1 — Create Affiliate

Registered user clicks:

```text
Become an Affiliate
```

Expected:

```text
Affiliate created
Unique referral code generated
Affiliate link returned
```

### Test 2 — Duplicate Affiliate

Same user clicks the button again for the same product.

Expected:

```text
No duplicate affiliate record
Existing affiliate link returned
```

### Test 3 — Referral Visit

Customer visits:

```text
/product/123?ref=FS-A8K92X
```

Expected:

```text
Valid affiliate detected
Click recorded
Affiliate attribution stored
```

### Test 4 — Invalid Referral

Customer visits:

```text
/product/123?ref=INVALID
```

Expected:

```text
No affiliate attribution
No commission
```

### Test 5 — Successful Purchase

Customer purchases through affiliate link.

Expected:

```text
Existing order created normally
Existing payment processed normally
Payment confirmed
Affiliate identified
Commission generated
```

### Test 6 — Commission Calculation

For:

```text
Sale = 1,000 MT
Rate = 5%
```

Expected:

```text
Commission = 50 MT
```

### Test 7 — Failed Payment

Expected:

```text
No commission
```

### Test 8 — Duplicate Payment Webhook

Expected:

```text
Only one commission
```

### Test 9 — Self Referral

Affiliate purchases through own link.

Expected:

```text
No commission
```

### Test 10 — Suspended Affiliate

Suspended affiliate link is used.

Expected:

```text
No new commission attribution
```

### Test 11 — Commission Rate Change

Create commission at:

```text
5%
```

Then change configuration to:

```text
10%
```

Expected:

```text
Old commission remains 5%
New commission uses 10%
```

### Test 12 — Dashboard

Verify:

```text
Clicks
Sales
Sales Value
Accumulated Commission
Pending Commission
Approved Commission
Commission History
```

are calculated correctly.

---

# 36. Migration Safety

Do not break existing Marketplace data.

All new affiliate-related fields should be nullable where appropriate when modifying existing tables.

Existing orders/products/users/payments must continue working exactly as before.

After migration:

```text
Existing users → unaffected
Existing products → unaffected
Existing orders → unaffected
Existing payments → unaffected
Existing checkout → unaffected
```

Affiliate functionality should simply become available as an additional feature.

---

# 37. Deliverables

Implement:

### Database

* Affiliate migration/table
* Commission migration/table
* Referral tracking structure if required
* Commission configuration using existing settings system where possible
* Required indexes/constraints

### Backend

* Affiliate model
* Commission model
* Relationships
* Affiliate creation
* Referral validation
* Click tracking
* Attribution
* Commission calculation
* Payment-success integration
* Duplicate protection
* Self-referral protection
* Suspension logic
* Admin management

### Frontend

* Product-page affiliate button
* Affiliate-link display
* Copy-link functionality
* Affiliate dashboard
* Affiliate statistics
* Affiliate products
* Affiliate links
* Commission history

### Admin

* Affiliate listing
* Affiliate details
* Referral/sale information
* Commission listing
* Approve/reject commission
* Suspend affiliate
* Commission-rate configuration

### Testing

Add appropriate unit/feature/integration tests following the existing project's testing conventions.

---

# 38. Strict Scope

The development scope is strictly limited to:

```text
Affiliate
   ↓
Unique Affiliate Link
   ↓
Referral Tracking
   ↓
Existing Product
   ↓
Existing Checkout
   ↓
Existing Order
   ↓
Existing Payment Confirmation
   ↓
Affiliate Identification
   ↓
5% Commission Calculation
   ↓
Commission Record
   ↓
Affiliate Dashboard
   ↓
Admin Management
```

Do NOT:

* Create a new product system
* Create a new order system
* Create a new checkout system
* Create a new payment system
* Replace the existing payment gateway
* Replace existing order logic
* Duplicate user records
* Duplicate product records
* Duplicate payment records
* Build a separate marketplace
* Introduce unnecessary dependencies
* Redesign unrelated parts of the application

---

# 39. Development Approach

Before writing code:

1. Inspect the existing FiloSchool Marketplace architecture.
2. Identify the existing models and database relationships.
3. Identify the exact product page implementation.
4. Identify the existing order/order-item structure.
5. Identify the exact payment-success confirmation flow.
6. Identify the existing admin architecture.
7. Identify the existing user dashboard/profile architecture.
8. Identify whether a settings table already exists.
9. Identify existing events/listeners/services that can be reused.
10. Design the smallest possible affiliate extension.

Then implement the feature incrementally.

After implementation, verify that all existing Marketplace flows continue working.

The final implementation should feel like a **native extension of the existing FiloSchool Marketplace**, not a separate affiliate application.

# Final Expected Flow

```text
REGISTERED USER
      ↓
Opens Product
      ↓
"Promote this product and earn 5%"
      ↓
Creates Affiliate
      ↓
Unique Referral Link
      ↓
Shares Link
      ↓
CUSTOMER
      ↓
Visits Product?ref=XXXX
      ↓
Referral Recorded
      ↓
Existing Checkout
      ↓
Existing Order
      ↓
Existing Payment
      ↓
Payment Confirmed
      ↓
Affiliate Identified
      ↓
Commission Calculated
      ↓
Commission Record Created
      ↓
Pending
      ↓
Admin Approves
      ↓
Approved Commission
      ↓
Visible in Affiliate Dashboard
```

**The existing Marketplace remains the source of truth for products, users, orders, and payments. The affiliate system only adds attribution and commission functionality around that existing infrastructure.**

# 40. IMPORTANT — Completely New Affiliate System / Do Not Reuse Existing "Affiliates" Structure

There is already an existing structure/module/label named **"Affiliates"** in the FiloSchool project.

**IMPORTANT: That existing "Affiliates" structure is used for a different purpose and MUST NOT be reused, modified, extended, connected to, or repurposed for this new Affiliate Program.**

The new Affiliate Program requested in this specification is a **completely new and independent system**.

## Strict Requirement

Do NOT use any existing:

```text
affiliates table
Affiliate model
Affiliate controller
Affiliate service
Affiliate routes
Affiliate relationships
Affiliate migrations
Affiliate components
Affiliate views
Affiliate APIs
Affiliate business logic
Affiliate configuration
Affiliate permissions
Affiliate status logic
```

if they belong to the existing "Affiliates" functionality.

Even if an existing table/model/component is named:

```text
affiliates
Affiliate
Affiliates
affiliate_id
```

**DO NOT assume that it belongs to this new system.**

First inspect what the existing "Affiliates" functionality is used for.

The existing functionality must remain completely untouched.

---

## New Independent Naming

Create a completely new database and application structure specifically for this Marketplace Affiliate Program.

Use clear names that distinguish this system from the existing "Affiliates" functionality.

For example, instead of blindly creating/reusing:

```text
affiliates
```

use a dedicated naming structure such as:

```text
marketplace_affiliates
marketplace_affiliate_commissions
marketplace_affiliate_clicks
```

or another clearly isolated naming convention appropriate for the existing project's database conventions.

Likewise, use dedicated application classes such as:

```text
MarketplaceAffiliate
MarketplaceAffiliateCommission
MarketplaceAffiliateClick
MarketplaceAffiliateService
MarketplaceAffiliateController
```

where appropriate.

The exact naming can be adjusted to match the project's conventions, but the **new system must remain clearly separated from the existing "Affiliates" feature.**

---

## No Shared Business Logic

The new Marketplace Affiliate Program must NOT depend on business logic from the existing "Affiliates" system.

For example, do NOT do:

```text
New Affiliate System
        ↓
Existing Affiliate Model
        ↓
Existing Affiliate Service
```

Instead:

```text
New Marketplace Affiliate System
        ↓
New Marketplace Affiliate Models
        ↓
New Marketplace Affiliate Services
        ↓
Existing Users / Products / Orders / Payments
```

The only existing systems that should be integrated with are the existing Marketplace's:

```text
Users
Products
Orders
Order Items
Checkout
Payments
Payment Confirmation
Admin Authentication
User Authentication
```

These are existing Marketplace infrastructure and should remain the source of truth.

---

## Existing "Affiliates" Feature Must Remain Unchanged

Before making any changes:

1. Search the entire project for:

   ```text
   affiliate
   affiliates
   Affiliate
   Affiliates
   ```

2. Identify every existing affiliate-related:

   * Table
   * Model
   * Controller
   * Route
   * Service
   * View
   * Component
   * API
   * Migration
   * Relationship
   * Configuration
   * Admin section

3. Determine which ones belong to the **old/existing Affiliates functionality**.

4. Do NOT modify those files or database structures unless there is an unavoidable technical dependency.

5. If a name collision exists, choose a new name for the new Marketplace Affiliate system.

---

## Database Isolation

The new affiliate system should have its own dedicated tables.

For example:

```text
marketplace_affiliates
marketplace_affiliate_clicks
marketplace_affiliate_commissions
```

Do not add new columns such as:

```text
affiliate_id
affiliate_code
commission_amount
```

to an existing "Affiliates" table.

If an existing `orders` table needs affiliate attribution, carefully determine whether a dedicated relationship table is safer than modifying the existing order structure.

The preferred architecture is:

```text
Existing User
      ↓
marketplace_affiliates
      ↓
Existing Product

marketplace_affiliate_clicks
      ↓
marketplace_affiliates

Existing Order / Order Item
      ↓
marketplace_affiliate_commissions
      ↓
marketplace_affiliates
```

This keeps the new functionality isolated.

---

## No Data Migration From Existing Affiliates

Do NOT migrate existing records from the old "Affiliates" system into the new Marketplace Affiliate system.

Do NOT convert existing affiliate records.

Do NOT copy existing affiliate users.

Do NOT import existing affiliate links.

Do NOT assume that existing affiliate records are Marketplace affiliates.

The new system starts as a **fresh, independent Affiliate Program**.

Existing affiliate-related data must remain exactly as it is.

---

## Independent Commission System

The new Marketplace Affiliate Program must have its own commission records.

Do not use an existing commission table if that commission system belongs to the old "Affiliates" functionality.

Create a dedicated commission structure for this system.

For example:

```text
marketplace_affiliate_commissions
```

with fields such as:

```text
id
marketplace_affiliate_id
user_id
product_id
order_id
order_item_id
payment_id
sale_amount
commission_rate
commission_amount
status
approved_at
rejected_at
created_at
updated_at
```

Only include fields that are actually required after inspecting the existing Marketplace architecture.

---

## Independent Referral Tracking

The referral tracking for this new system must also be completely new.

Do not reuse the existing "Affiliates" referral/click tracking.

For example:

```text
marketplace_affiliate_clicks
```

can contain:

```text
id
marketplace_affiliate_id
product_id
referral_code
session_id / visitor identifier where appropriate
created_at
```

Again, follow the project's existing architecture and privacy/security requirements.

---

## Independent Configuration

The commission configuration for this new system must also be independent.

Initial value:

```text
5%
```

If the project already has a generic settings system, it may be used as the **storage mechanism**, but the setting key must clearly belong to this new Marketplace Affiliate Program.

For example:

```text
marketplace_affiliate_commission_rate = 5
```

Do NOT reuse an existing:

```text
affiliate_commission_rate
```

setting if that setting belongs to the old "Affiliates" system.

---

## Independent Admin Section

The existing admin "Affiliates" section, if present, must remain untouched.

Create a separate admin section for the new system, for example:

```text
Marketplace Affiliate Program
```

or:

```text
Product Affiliate Program
```

This new section should manage only the new Marketplace Affiliate records and commissions.

Admin should be able to:

```text
View Marketplace Affiliates
View Marketplace Affiliate Links
View Marketplace Affiliate Clicks
View Marketplace Affiliate Sales
View Marketplace Affiliate Commissions
Approve Commissions
Reject Commissions
Suspend Marketplace Affiliates
Configure Marketplace Affiliate Commission %
```

Do not mix old Affiliate records with new Marketplace Affiliate records.

---

## Independent User Dashboard

Likewise, the new feature should be added as a dedicated section such as:

```text
Affiliate Program
```

inside the existing user's profile/dashboard.

This section must display only data from the new Marketplace Affiliate system.

Do not display or combine records from the old "Affiliates" functionality.

---

## Final Architecture

The intended architecture is:

```text
                 EXISTING FILOSCHOOL MARKETPLACE
                 ────────────────────────────────

                      Existing User
                           │
                           │
                           ▼
                 Existing Product
                           │
                           │
              ┌────────────┴────────────┐
              │                         │
              ▼                         ▼
     NEW MARKETPLACE              Existing Customer
       AFFILIATE                         │
              │                          │
              ▼                          ▼
    Unique Referral Link          Existing Checkout
              │                          │
              ▼                          ▼
    New Click Tracking            Existing Order
              │                          │
              │                          ▼
              │                   Existing Payment
              │                          │
              │                    Payment Confirmed
              │                          │
              └──────────────┬───────────┘
                             ▼
                  NEW AFFILIATE ATTRIBUTION
                             │
                             ▼
                 NEW COMMISSION RECORD
                             │
                             ▼
                    Pending Commission
                             │
                             ▼
                       Admin Review
                       /          \
                      ▼            ▼
                  Approved       Rejected
```

And separately:

```text
OLD "AFFILIATES" SYSTEM
        │
        ├── MUST REMAIN UNCHANGED
        ├── MUST NOT BE REUSED
        ├── MUST NOT BE CONNECTED
        └── MUST NOT SHARE BUSINESS LOGIC
```

## Absolute Rule

**Treat the existing "Affiliates" functionality as a completely unrelated legacy/external feature.**

The new Marketplace Affiliate Program must be developed **from scratch**, with its own:

* Database tables
* Models
* Relationships
* Controllers
* Services
* Routes
* Referral tracking
* Click tracking
* Commission records
* Commission configuration
* Admin management
* User dashboard
* Validation
* Tests
* Business logic

The only integration points should be the existing Marketplace's **Users, Products, Orders/Order Items, Checkout, and Payment Confirmation** systems.

**Do not reuse or modify the existing "Affiliates" functionality simply because it has the same terminology.**
