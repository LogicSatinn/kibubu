<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\AccountType;
use App\Models\Account;
use App\Models\AccountCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    public function __construct(
        private readonly User $user
    ) {}

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->seedIncomeAccounts();
        $this->seedHousingAccounts();
        $this->seedHomeServicesAccounts();
        $this->seedUtilitiesAccounts();
        $this->seedHouseholdItemsAccounts();
        $this->seedFoodAccounts();
        $this->seedTransportationAccounts();
        $this->seedMedicalHealthAccounts();
        $this->seedInsuranceAccounts();
        $this->seedKidsAccounts();
        $this->seedPetsAccounts();
        $this->seedSubscriptionsAccounts();
        $this->seedPersonalCareAccounts();
        $this->seedPersonalDevelopmentAccounts();
        $this->seedFinancialProfessionalFeesAccounts();
        $this->seedRecreationFunAccounts();
        $this->seedTravelAccounts();
        $this->seedTechnologyAccounts();
        $this->seedGiftsAccounts();
        $this->seedCharitableGivingAccounts();
        $this->seedSavingsGoalsInvestingAccounts();
        $this->seedDebtPaymentsAccounts();
    }

    private function seedIncomeAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Income',
            'type' => AccountType::REVENUE->value(),
            'color' => 'green',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Salary & Wages', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Self-employed Income', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Bonus', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Tips', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Tax Refund', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Gifts Received', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Alimony Received', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Child Support Received', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Rental Income', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Dividend Income', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Interest Earned', 'color' => 'green']),
        ]);
    }

    private function seedHousingAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Housing',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'purple',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Mortgage/Rent', 'color' => 'purple']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Homeowners association (HOA fees)', 'color' => 'purple']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Homeowners insurance / Renters insurance', 'color' => 'purple']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Property insurance (i.e. jewelry)', 'color' => 'purple']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Home repairs / Maintenance', 'color' => 'purple']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Property Taxes', 'color' => 'purple']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Home Improvement', 'color' => 'purple']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Furnishings', 'color' => 'purple']),
        ]);
    }

    private function seedHomeServicesAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Home Services',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'orange',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'House Cleaning', 'color' => 'orange']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Lawn Care', 'color' => 'orange']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Security System', 'color' => 'orange']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Pest Control', 'color' => 'orange']),
        ]);
    }

    private function seedUtilitiesAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Utilities',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'gray',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Natural Gas / Electricity', 'color' => 'gray']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Landline / Home Phone', 'color' => 'gray']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Mobile Phone', 'color' => 'gray']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Home Internet', 'color' => 'gray']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Garbage', 'color' => 'gray']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Recycling', 'color' => 'gray']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Water', 'color' => 'gray']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Sewer', 'color' => 'gray']),
        ]);
    }

    private function seedHouseholdItemsAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Household Items',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'gray',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Cleaning Supplies', 'color' => 'gray']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Home Improvement', 'color' => 'gray']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Paper Products', 'color' => 'gray']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Toiletries', 'color' => 'gray']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Laundry Supplies', 'color' => 'gray']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Postage', 'color' => 'gray']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Furniture', 'color' => 'gray']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Home Decor', 'color' => 'gray']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Pool Supplies', 'color' => 'gray']),
        ]);
    }

    private function seedFoodAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Food',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'blue',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Groceries', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Fast Food', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Coffee Shops', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Breakfast', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Lunch', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Dinner', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Drinks', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Snacks', 'color' => 'blue']),
        ]);
    }

    private function seedTransportationAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Transportation',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'pink',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Car Payment / Lease Payments', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Car Insurance', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Gas', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Oil Change', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Maintenance / Repairs', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Personal Property Taxes', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Registration', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Public Transportation', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Ride Sharing (Uber, Lyft)', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Tolls', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Parking Fees', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Roadside Assistance (AAA)', 'color' => 'pink']),
        ]);
    }

    private function seedMedicalHealthAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Medical/Health',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'red',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Health Insurance', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Dental Insurance', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Vision Insurance', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Prescriptions / Medication', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Doctor Bills', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Dentist Visits', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Hospital Bills', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Optometrist', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Glasses, Contacts', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Chiropractor Visits', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Vitamins/Supplements', 'color' => 'red']),
        ]);
    }

    private function seedInsuranceAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Insurance',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'red',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Life Insurance', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Disability Insurance', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Long-term Care Insurance', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Umbrella Policy', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Identity Theft', 'color' => 'red']),
        ]);
    }

    private function seedKidsAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Kids',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'blue',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Tuition', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Daycare', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Babysitter / Nanny', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Diapers, Formula - Baby Necessities', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Summer Camp', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'School or Extra-curricular activities', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'School Supplies', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'School Lunches', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Lessons', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Allowance', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Toys', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Kids Discretionary Spending', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Child Support', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Kids Clothing', 'color' => 'blue']),
        ]);
    }

    private function seedPetsAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Pets',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'blue',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Veterinarian Visits', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Pet Food', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Pet Medication', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Pet Toys/Beds', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Pet Accessories', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Pet Grooming', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Pet Insurance', 'color' => 'blue']),
        ]);
    }

    private function seedSubscriptionsAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Subscriptions',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'red',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Netflix/Hulu', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Amazon Prime', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Music (Spotify, Pandora)', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Sports TV Subscription', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Software Subscriptions', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Magazines', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Professional Society Annual Fees', 'color' => 'red']),
        ]);
    }

    private function seedPersonalCareAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Personal Care',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'pink',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Haircuts', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Hair Coloring', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Hair Products', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Cosmetics', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Nail Salon', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Eyebrows', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Massages', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Spa Services', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Grooming', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Gym Membership', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Counseling/Therapy', 'color' => 'pink']),
        ]);
    }

    private function seedPersonalDevelopmentAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Personal Development',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'blue',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Books', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Personal Coach', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Self-Improvement', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Conferences', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Online Courses', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'In Person Courses', 'color' => 'blue']),
        ]);
    }

    private function seedFinancialProfessionalFeesAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Financial/Professional Fees',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'red',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Financial Advisor', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Lawyer/Attorney Fees', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Tax Professional', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Business Consultant', 'color' => 'red']),
        ]);
    }

    private function seedRecreationFunAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Recreation/Fun',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'green',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Movies', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Concerts', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Hobbies/Crafts', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Hosting Parties', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Books', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Entertainment', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Sporting Events', 'color' => 'green']),
        ]);
    }

    private function seedTravelAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Travel',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'purple',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Vacation', 'color' => 'purple']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Trips to See Family', 'color' => 'purple']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Trips for Weddings, Bachelor/Bachelorette Parties', 'color' => 'purple']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Souvenirs', 'color' => 'purple']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Baggage Fees', 'color' => 'purple']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'TSA Precheck or Global Entry', 'color' => 'purple']),
        ]);
    }

    private function seedTechnologyAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Technology',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'blue',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Mobile Phone', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Computer / Computer Accessories', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Speaker System', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'WiFi Mesh System / WiFi Extender', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Smart Home', 'color' => 'blue']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Gaming System / Video Games / Gaming Accessories', 'color' => 'blue']),
        ]);
    }

    private function seedGiftsAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Gifts',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'red',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Family Birthday Gifts', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Friend Birthday Gifts', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Wedding / Wedding Shower Gifts', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Anniversary Gifts', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Baby / Baby Shower Gifts', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Teacher Gifts', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Service Person Gifts', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Thank You Gifts', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Holiday Gifts', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Special Occasions', 'color' => 'red']),
        ]);
    }

    private function seedCharitableGivingAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Charitable Giving',
            'type' => AccountType::EXPENSE->value(),
            'color' => 'pink',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Charity / Donations', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Tithing', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Religious', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Community', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Political', 'color' => 'pink']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Non-cash Donations', 'color' => 'pink']),
        ]);
    }

    private function seedSavingsGoalsInvestingAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Savings Goals/Investing',
            'type' => AccountType::ASSET->value(),
            'color' => 'green',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'College Savings', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Retirement Savings', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'New Car Savings', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Health Savings Account / Plan', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Emergency Fund', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Brokerage Investments', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Traditional / Roth IRA', 'color' => 'green']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Down Payment Savings', 'color' => 'green']),
        ]);
    }

    private function seedDebtPaymentsAccounts(): void
    {
        $accountCategory = AccountCategory::create([
            'user_id' => $this->user->id,
            'name' => 'Debt Payments',
            'type' => AccountType::LIABILITY->value(),
            'color' => 'red',
        ]);

        $accountCategory->accounts()->saveMany([
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Credit Card Debt', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Student Loan Debt', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Medical Debt', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Personal Loans', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Auto Loan Payments', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Back Taxes', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Past Due Bills', 'color' => 'red']),
            new Account(['auto_generated' => true, 'user_id' => $this->user->id, 'name' => 'Alimony', 'color' => 'red']),
        ]);
    }
}
