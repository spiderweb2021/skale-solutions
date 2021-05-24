<?php

use Illuminate\Database\Seeder;

class ProfessionalTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \Illuminate\Support\Facades\DB::table('professional_types')->insert([
       	[ 'type' => 'Lawyer','parent_id' => '0','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Accountant','parent_id' => '0','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Finance advisor','parent_id' => '0','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Consultant','parent_id' => '0','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Regulatory & Administrative Law','parent_id' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Corporate & Commercial Law','parent_id' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Criminal Law','parent_id' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Bankruptcy, Insolvency & Restructuring','parent_id' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Family Law','parent_id' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Taxation Law','parent_id' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Real Estate Law','parent_id' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Immigration Law','parent_id' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Municipal Law','parent_id' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Litigation','parent_id' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Wills, Trusts & Estates','parent_id' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Labour & Employment','parent_id' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Charities & Not-for-Profit Law','parent_id' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Blockchain & Cryptocurrency Law','parent_id' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'International Law','parent_id' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Aboriginal/Indigenous Law','parent_id' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Agribusiness Law','parent_id' => '1','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Accounting - private','parent_id' => '2','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Accounting - Corporate','parent_id' => '2','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Strategy','parent_id' => '2','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Bankruptcy, Insolvency & Restructuring','parent_id' => '2','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Bookkeeping and billing service','parent_id' => '2','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Business Succession Planning','parent_id' => '2','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Immigration service','parent_id' => '2','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Estate Planning','parent_id' => '2','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Payroll','parent_id' => '2','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Plans and Proposal','parent_id' => '2','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Tax','parent_id' => '2','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Technology','parent_id' => '2','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Business succession Planning','parent_id' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Cash Flow planning','parent_id' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Credit Counselling','parent_id' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Debt Consolodation','parent_id' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Divorce Specialist','parent_id' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Estate Planning','parent_id' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Family entreprise Planning','parent_id' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Financial planning - Private','parent_id' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Financial planning - Corporate','parent_id' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Incorporated professionals','parent_id' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Insurances services','parent_id' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Pension Planning Services','parent_id' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Portfolio Management','parent_id' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Retirement Planning','parent_id' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Wealth Management','parent_id' => '3','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Business Managemant','parent_id' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Business Succession','parent_id' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Business Valuation','parent_id' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Commercial Real Estate','parent_id' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Corporate Sales','parent_id' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Engineering Consultants','parent_id' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Risk Consultants','parent_id' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Financial Consultants','parent_id' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Forensics and investigative Consultants','parent_id' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'General Management Consultants','parent_id' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Human Resources','parent_id' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Information Technology','parent_id' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Leadership Development Consultants','parent_id' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Marketing Consultants','parent_id' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Operation Consultants','parent_id' => '4','status' => '0','created_at' => \Carbon\Carbon::now()],
       	[ 'type' => 'Public Affairs Consultants','parent_id' => '4','status' => '0','created_at' => \Carbon\Carbon::now()]
    
        ]);
    }
}
