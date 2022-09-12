<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Category::create(['name'=>'Development','slug' =>'development']);
        Category::create(['name'=>'Business','slug' =>'business']);
        Category::create(['name'=>'Finance &amp; Accounting','slug' =>'finance-accounting']);
        Category::create(['name'=>'IT &amp; Software','slug' =>'it-software']);
        Category::create(['name'=>'Office Productivity','slug' =>'office-productivity']);
        Category::create(['name'=>'Personal Development','slug' =>'personal-development']);
        Category::create(['name'=>'Design','slug' =>'design']);
        Category::create(['name'=>'Marketing','slug' =>'marketing']);
        Category::create(['name'=>'Lifestyle','slug' =>'lifestyle']);
        Category::create(['name'=>'Photography &amp; Video','slug' =>'photography-video']);
        Category::create(['name'=>'Health &amp; Fitness','slug' =>'health-fitness']);
        Category::create(['name'=>'Music','slug' =>'music']);
        Category::create(['name'=>'Teaching &amp; Academics','slug' =>'teaching-academics']);
        Category::create(['name'=>'Fitness','slug' =>'fitness']);
        Category::create(['name'=>'General Health','slug' =>'general-health']);
        Category::create(['name'=>'Sports','slug' =>'sports']);
        Category::create(['name'=>'Nutrition &amp; Diet','slug' =>'nutrition-diet']);
        Category::create(['name'=>'Yoga','slug' =>'yoga']);
        Category::create(['name'=>'Mental Health','slug' =>'mental Health']);
        Category::create(['name'=>'Martial Arts &amp; Self Defense','slug' =>'martial-arts-self-defense']);
        Category::create(['name'=>'Safety &amp; First Aid','slug' =>'safety-first-aid']);
        Category::create(['name'=>'Dance','slug' =>'dance']);
        Category::create(['name'=>'Meditation','slug' =>'meditation']);
        Category::create(['name'=>'Other Health &amp; Fitness','slug' =>'other-health-fitness']);

        $category = Category::find(1);
   
        Category::create(['name'=>'Web Development','slug' =>'web-development' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Data Science','slug' =>'data-science' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Mobile Development','slug' =>'mobile-development' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Programming Languages','slug' =>'programming-languages' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Game Development','slug' =>'game-development' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Database Design &amp; Development','slug'=>'database-design-development', 'parent_category_id' => 1]);
        Category::create(['name'=>'Software Testing','slug'=>'software-testing', 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Software Engineering','slug'=>'software-engineering', 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Software Development Tools','slug'=>'software-development-tools', 'parent_category_id' => $category->id]);
        Category::create(['name'=>'No-Code Development','slug'=>'No-Code-development', 'parent_category_id' => $category->id]);

        $category = Category::find(2);
        Category::create(['name'=>'Entrepreneurship','slug' =>'entrepreneurship' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Communication','slug' =>'communication' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Management','slug' =>'management' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Sales','slug' =>'sales' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Business Strategy','slug' =>'business-strategy' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Operations','slug' =>'operations' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Project Management','slug' =>'project-management' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Business Law','slug' =>'business-law' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Business Analytics &amp; Intelligence','slug' =>'business-analytics-intelligence' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Human Resources','slug' =>'human-resources' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Industry','slug' =>'industry' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'E-Commerce','slug' =>'e-eommerce' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Media','slug' =>'media' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Real Estate','slug' =>'real-estate' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Other Business','slug' =>'other-business' , 'parent_category_id' => $category->id]);

        $category = Category::find(3);
        Category::create(['name'=>'Accounting &amp; Bookkeeping','slug' =>'accounting-bookkeeping' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Compliance','slug' =>'compliance' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Cryptocurrency &amp; Blockchain','slug' =>'cryptocurrency-blockchain' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Economics','slug' =>'economics' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Finance','slug' =>'finance' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Finance Cert &amp; Exam Prep','slug' =>'finance-cert-exam-prep' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Financial Modeling &amp; Analysis','slug' =>'financial-modeling-analysis' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Investing &amp; Trading','slug' =>'investing-trading' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Money Management Tools','slug' =>'money-management-tools' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Taxes','slug' =>'taxes' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Other Finance &amp; Accounting','slug' =>'other-finance-accounting' , 'parent_category_id' => $category->id]);

        $category = Category::find(4);
        Category::create(['name'=>'IT Certifications','slug' =>'it-certifications' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Network &amp; Security','slug' =>'network-security' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Hardware','slug' =>'hardware' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Operating Systems &amp; Servers','slug' =>'operating-systems-servers' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Other IT &amp; Software','slug' =>'other-it-software' , 'parent_category_id' => $category->id]);
        
        
        $category = Category::find(5);
        Category::create(['name'=>'Microsoft','slug' =>'microsoft' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Apple','slug' =>'apple' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Google','slug' =>'google' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'SAP','slug' =>'sap' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Oracle','slug' =>'oracle' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Other Office Productivity','slug' =>'other-office-productivity' , 'parent_category_id' => $category->id]);
        
        
        $category = Category::find(6);
        Category::create(['name'=>'Personal Transformatio','slug' =>'personal-transformation' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Personal Productivity','slug' =>'personal-productivity' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Leadership','slug' =>'leadership' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Career Development','slug' =>'career-development' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Parenting &amp; Relationships','slug' =>'parenting-relationships' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Happiness','slug' =>'happiness' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Esoteric Practices','slug' =>'esoteric-practices' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Religion &amp; Spirituality','slug' =>'religion-spirituality' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Personal Brand Building','slug' =>'personal-brand-building' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Creativity','slug' =>'creativity' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Influence','slug' =>'influence' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Self Esteem &amp; Confidence','slug' =>'self-esteem-confidence' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Stress Management','slug' =>'stress-management' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Memory &amp; Study Skills','slug' =>'memory-study-skills' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Motivation','slug' =>'motivation' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Other Personal Development','slug' =>'other-personal-development' , 'parent_category_id' => $category->id]);
        
        $category = Category::find(7);
        Category::create(['name'=>'Web Design','slug' =>'web-design' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Graphic Design &amp; Illustration','slug' =>'graphic-design-illustration' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Design Tools','slug' =>'design-tools' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'User Experience Design','slug' =>'user-experience-design' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Game Design','slug' =>'game-design' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'3D &amp; Animation','slug' =>'3d-animation' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Fashion Design','slug' =>'fashion-design' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Architectural Design','slug' =>'architectural-design' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Interior Design','slug' =>'interior-design' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Other Design','slug' =>'other-design' , 'parent_category_id' => $category->id]);
        
        $category = Category::find(8);
        Category::create(['name'=>'Digital Marketing','slug' =>'digital-marketing' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Search Engine Optimization','slug' =>'search-engine-optimization' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Social Media Marketing','slug' =>'social-media-marketing' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Branding','slug' =>'branding' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Marketing Fundamentals','slug' =>'marketing-fundamentals' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Marketing Analytics &amp; Automation','slug' =>'marketing-analytics-automation' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Public Relations','slug' =>'public-relations' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Paid Advertising','slug' =>'paid-advertising' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Video &amp; Mobile Marketing','slug' =>'video-mobile-marketing' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Content Marketing','slug' =>'content-marketing' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Growth Hacking','slug' =>'growth-hacking' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Affiliate Marketing','slug' =>'affiliate-marketing' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Product Marketing','slug' =>'product-marketing' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Other Marketing','slug' =>'other-marketing' , 'parent_category_id' => $category->id]);
        
        
        $category = Category::find(9);
        Category::create(['name'=>'Arts &amp; Crafts','slug' =>'arts-crafts' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Beauty &amp; Makeup','slug' =>'beauty-makeup' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Esoteric Practices','slug' =>'esoteric-practices' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Food &amp; Beverage','slug' =>'food-beverage' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Gaming','slug' =>'gaming' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Home Improvement &amp; Gardening','slug' =>'home-improvement-gardening' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Pet Care &amp; Training','slug' =>'pet-care-training' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Travel','slug' =>'travel' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Other Lifestyle','slug' =>'other-lifestyle' , 'parent_category_id' => $category->id]);
        
        
        $category = Category::find(10);
        Category::create(['name'=>'Digital Photography','slug' =>'digital-photography' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Photography','slug' =>'photography' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Portrait Photography','slug' =>'portrait-photography' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Photography Tools','slug' =>'photography-tools' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Commercial Photography','slug' =>'commercial-photography' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Video Design','slug' =>'video-design' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Other Photography &amp; Video','slug' =>'other-photography-video' , 'parent_category_id' => $category->id]);


        $category = Category::find(11);
        Category::create(['name'=>'Fitness','slug' =>'fitness' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'General Health','slug' =>'general-health' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Sports','slug' =>'sports' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Nutrition &amp; Diet','slug' =>'nutrition-diet' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Yoga','slug' =>'yoga' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Mental Health','slug' =>'mental-health' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Martial Arts &amp; Self Defense','slug' =>'martial-arts-self-defense' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Safety &amp; First Aid','slug' =>'safety-first-aid' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Dance','slug' =>'dance' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Meditation','slug' =>'meditation' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Other Health &amp; Fitness','slug' =>'other-health-fitness' , 'parent_category_id' => $category->id]);
        
        
        
        $category = Category::find(12);
        Category::create(['name'=>'Instruments','slug' =>'instruments' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Music Production','slug' =>'music-production' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Music Fundamentals','slug' =>'music-fundamentals' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Vocal','slug' =>'vocal' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Music Techniques','slug' =>'music-techniques' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Music Software','slug' =>'music-software' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Other Music','slug' =>'' , 'parent_category_id' => $category->id]);
        
        $category = Category::find(13);
        Category::create(['name'=>'Engineering','slug' =>'engineering' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Humanities','slug' =>'humanities' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Math','slug' =>'math' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Science','slug' =>'science' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Online Education','slug' =>'online-education' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Social Science','slug' =>'social-science' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Language Learning','slug' =>'language-learning' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Teacher Training','slug' =>'teacher-training' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Test Prep','slug' =>'test-prep' , 'parent_category_id' => $category->id]);
        Category::create(['name'=>'Other Teaching &amp; Academics','slug' =>'other-teaching-academics' , 'parent_category_id' => $category->id]);
        
        

    }
}
