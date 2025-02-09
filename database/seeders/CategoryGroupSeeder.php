<?php

namespace Database\Seeders;

use App\Models\CategoryGroup;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryGroupSeeder extends Seeder
{
    public function __construct(
        private readonly User $user
    ) {}

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->seedIncomeCategories();
        $this->seedHousingCategories();
        $this->seedHomeServicesCategories();
        $this->seedUtilitiesCategories();
        $this->seedHouseholdItemsCategories();
        $this->seedFoodCategories();
        $this->seedTransportationCategories();
        $this->seedMedicalHealthCategories();
        $this->seedInsuranceCategories();
        $this->seedKidsCategories();
        $this->seedPetsCategories();
        $this->seedSubscriptionsCategories();
        $this->seedPersonalCareCategories();
        $this->seedPersonalDevelopmentCategories();
        $this->seedFinancialProfessionalFeesCategories();
        $this->seedRecreationFunCategories();
        $this->seedTravelCategories();
        $this->seedTechnologyCategories();
        $this->seedGiftsCategories();
        $this->seedCharitableGivingCategories();
        $this->seedSavingsGoalsInvestingCategories();
        $this->seedDebtPaymentsCategories();
    }

    private function seedIncomeCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Income',
            'color' => 'green'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Salary & Wages', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Self-employed Income', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Bonus', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Tips', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Tax Refund', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Gifts Received', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Alimony Received', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Child Support Received', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Rental Income', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Dividend Income', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Interest Earned', 'color' => 'green']),
        ]);
    }

    private function seedHousingCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Housing',
            'color' => 'purple'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Mortgage/Rent', 'color' => 'purple']),
            new Category(['user_id' => $this->user->id, 'name' => 'Homeowners association (HOA fees)', 'color' => 'purple']),
            new Category(['user_id' => $this->user->id, 'name' => 'Homeowners insurance / Renters insurance', 'color' => 'purple']),
            new Category(['user_id' => $this->user->id, 'name' => 'Property insurance (i.e. jewelry)', 'color' => 'purple']),
            new Category(['user_id' => $this->user->id, 'name' => 'Home repairs / Maintenance', 'color' => 'purple']),
            new Category(['user_id' => $this->user->id, 'name' => 'Property Taxes', 'color' => 'purple']),
            new Category(['user_id' => $this->user->id, 'name' => 'Home Improvement', 'color' => 'purple']),
            new Category(['user_id' => $this->user->id, 'name' => 'Furnishings', 'color' => 'purple']),
        ]);
    }

    private function seedHomeServicesCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Home Services',
            'color' => 'orange'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'House Cleaning', 'color' => 'orange']),
            new Category(['user_id' => $this->user->id, 'name' => 'Lawn Care', 'color' => 'orange']),
            new Category(['user_id' => $this->user->id, 'name' => 'Security System', 'color' => 'orange']),
            new Category(['user_id' => $this->user->id, 'name' => 'Pest Control', 'color' => 'orange']),
        ]);
    }

    private function seedUtilitiesCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Utilities',
            'color' => 'gray'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Natural Gas / Electricity', 'color' => 'gray']),
            new Category(['user_id' => $this->user->id, 'name' => 'Landline / Home Phone', 'color' => 'gray']),
            new Category(['user_id' => $this->user->id, 'name' => 'Mobile Phone', 'color' => 'gray']),
            new Category(['user_id' => $this->user->id, 'name' => 'Home Internet', 'color' => 'gray']),
            new Category(['user_id' => $this->user->id, 'name' => 'Garbage', 'color' => 'gray']),
            new Category(['user_id' => $this->user->id, 'name' => 'Recycling', 'color' => 'gray']),
            new Category(['user_id' => $this->user->id, 'name' => 'Water', 'color' => 'gray']),
            new Category(['user_id' => $this->user->id, 'name' => 'Sewer', 'color' => 'gray']),
        ]);
    }

    private function seedHouseholdItemsCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Household Items',
            'color' => 'gray'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Cleaning Supplies', 'color' => 'gray']),
            new Category(['user_id' => $this->user->id, 'name' => 'Home Improvement', 'color' => 'gray']),
            new Category(['user_id' => $this->user->id, 'name' => 'Paper Products', 'color' => 'gray']),
            new Category(['user_id' => $this->user->id, 'name' => 'Toiletries', 'color' => 'gray']),
            new Category(['user_id' => $this->user->id, 'name' => 'Laundry Supplies', 'color' => 'gray']),
            new Category(['user_id' => $this->user->id, 'name' => 'Postage', 'color' => 'gray']),
            new Category(['user_id' => $this->user->id, 'name' => 'Furniture', 'color' => 'gray']),
            new Category(['user_id' => $this->user->id, 'name' => 'Home Decor', 'color' => 'gray']),
            new Category(['user_id' => $this->user->id, 'name' => 'Pool Supplies', 'color' => 'gray']),
        ]);
    }

    private function seedFoodCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Food',
            'color' => 'blue'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Groceries', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Fast Food', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Coffee Shops', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Breakfast', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Lunch', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Dinner', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Drinks', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Snacks', 'color' => 'blue']),
        ]);
    }

    private function seedTransportationCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Transportation',
            'color' => 'pink'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Car Payment / Lease Payments', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Car Insurance', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Gas', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Oil Change', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Maintenance / Repairs', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Personal Property Taxes', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Registration', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Public Transportation', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Ride Sharing (Uber, Lyft)', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Tolls', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Parking Fees', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Roadside Assistance (AAA)', 'color' => 'pink']),
        ]);
    }

    private function seedMedicalHealthCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Medical/Health',
            'color' => 'red'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Health Insurance', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Dental Insurance', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Vision Insurance', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Prescriptions / Medication', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Doctor Bills', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Dentist Visits', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Hospital Bills', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Optometrist', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Glasses, Contacts', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Chiropractor Visits', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Vitamins/Supplements', 'color' => 'red']),
        ]);
    }

    private function seedInsuranceCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Insurance',
            'color' => 'red'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Life Insurance', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Disability Insurance', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Long-term Care Insurance', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Umbrella Policy', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Identity Theft', 'color' => 'red']),
        ]);
    }

    private function seedKidsCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Kids',
            'color' => 'blue'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Tuition', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Daycare', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Babysitter / Nanny', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Diapers, Formula - Baby Necessities', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Summer Camp', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'School or Extra-curricular activities', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'School Supplies', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'School Lunches', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Lessons', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Allowance', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Toys', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Kids Discretionary Spending', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Child Support', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Kids Clothing', 'color' => 'blue']),
        ]);
    }

    private function seedPetsCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Pets',
            'color' => 'blue'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Veterinarian Visits', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Pet Food', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Pet Medication', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Pet Toys/Beds', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Pet Accessories', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Pet Grooming', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Pet Insurance', 'color' => 'blue']),
        ]);
    }

    private function seedSubscriptionsCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Subscriptions',
            'color' => 'red'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Netflix/Hulu', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Amazon Prime', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Music (Spotify, Pandora)', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Sports TV Subscription', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Software Subscriptions', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Magazines', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Professional Society Annual Fees', 'color' => 'red']),
        ]);
    }

    private function seedPersonalCareCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Personal Care',
            'color' => 'pink'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Haircuts', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Hair Coloring', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Hair Products', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Cosmetics', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Nail Salon', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Eyebrows', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Massages', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Spa Services', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Grooming', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Gym Membership', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Counseling/Therapy', 'color' => 'pink']),
        ]);
    }

    private function seedPersonalDevelopmentCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Personal Development',
            'color' => 'blue'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Books', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Personal Coach', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Self-Improvement', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Conferences', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Online Courses', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'In Person Courses', 'color' => 'blue']),
        ]);
    }

    private function seedFinancialProfessionalFeesCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Financial/Professional Fees',
            'color' => 'red'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Financial Advisor', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Lawyer/Attorney Fees', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Tax Professional', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Business Consultant', 'color' => 'red']),
        ]);
    }

    private function seedRecreationFunCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Recreation/Fun',
            'color' => 'green'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Movies', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Concerts', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Hobbies/Crafts', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Hosting Parties', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Books', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Entertainment', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Sporting Events', 'color' => 'green']),
        ]);
    }

    private function seedTravelCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Travel',
            'color' => 'purple'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Vacation', 'color' => 'purple']),
            new Category(['user_id' => $this->user->id, 'name' => 'Trips to See Family', 'color' => 'purple']),
            new Category(['user_id' => $this->user->id, 'name' => 'Trips for Weddings, Bachelor/Bachelorette Parties', 'color' => 'purple']),
            new Category(['user_id' => $this->user->id, 'name' => 'Souvenirs', 'color' => 'purple']),
            new Category(['user_id' => $this->user->id, 'name' => 'Baggage Fees', 'color' => 'purple']),
            new Category(['user_id' => $this->user->id, 'name' => 'TSA Precheck or Global Entry', 'color' => 'purple']),
        ]);
    }

    private function seedTechnologyCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Technology',
            'color' => 'blue'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Mobile Phone', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Computer / Computer Accessories', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Speaker System', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'WiFi Mesh System / WiFi Extender', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Smart Home', 'color' => 'blue']),
            new Category(['user_id' => $this->user->id, 'name' => 'Gaming System / Video Games / Gaming Accessories', 'color' => 'blue']),
        ]);
    }

    private function seedGiftsCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Gifts',
            'color' => 'red'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Family Birthday Gifts', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Friend Birthday Gifts', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Wedding / Wedding Shower Gifts', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Anniversary Gifts', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Baby / Baby Shower Gifts', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Teacher Gifts', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Service Person Gifts', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Thank You Gifts', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Holiday Gifts', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Special Occasions', 'color' => 'red']),
        ]);
    }

    private function seedCharitableGivingCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Charitable Giving',
            'color' => 'pink'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Charity / Donations', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Tithing', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Religious', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Community', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Political', 'color' => 'pink']),
            new Category(['user_id' => $this->user->id, 'name' => 'Non-cash Donations', 'color' => 'pink']),
        ]);
    }

    private function seedSavingsGoalsInvestingCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Savings Goals/Investing',
            'color' => 'green'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'College Savings', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Retirement Savings', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'New Car Savings', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Health Savings Account / Plan', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Emergency Fund', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Brokerage Investments', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Traditional / Roth IRA', 'color' => 'green']),
            new Category(['user_id' => $this->user->id, 'name' => 'Down Payment Savings', 'color' => 'green']),
        ]);
    }

    private function seedDebtPaymentsCategories(): void
    {
        $group = CategoryGroup::create([
            'user_id' => $this->user->id,
            'name' => 'Debt Payments',
            'color' => 'red'
        ]);

        $group->categories()->saveMany([
            new Category(['user_id' => $this->user->id, 'name' => 'Credit Card Debt', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Student Loan Debt', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Medical Debt', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Personal Loans', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Auto Loan Payments', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Back Taxes', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Past Due Bills', 'color' => 'red']),
            new Category(['user_id' => $this->user->id, 'name' => 'Alimony', 'color' => 'red']),
        ]);
    }
}
