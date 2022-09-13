<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Topic;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::find(14);
        Topic::create(['name'=>'JavaScript', 'slug'=>'javascript', 'category_id' => $category->id]);
        Topic::create(['name'=>'React', 'slug'=>'react', 'category_id' => $category->id]);
        Topic::create(['name'=>'CSS', 'slug'=>'css', 'category_id' => $category->id]);
        Topic::create(['name'=>'Angular', 'slug'=>'angular', 'category_id' => $category->id]);
        Topic::create(['name'=>'Typescript', 'slug'=>'typescript', 'category_id' => $category->id]);
        Topic::create(['name'=>'Node.Js', 'slug'=>'nodejs', 'category_id' => $category->id]);
        Topic::create(['name'=>'HTML5', 'slug'=>'html5', 'category_id' => $category->id]);
        Topic::create(['name'=>'Django', 'slug'=>'django', 'category_id' => $category->id]);

        $category = Category::find(15);
        Topic::create(['name'=>'Python', 'slug'=> 'python', 'category_id' => $category->id]);
        Topic::create(['name'=>'Machine Learning', 'slug'=> 'machine-learning', 'category_id' => $category->id]);
        Topic::create(['name'=>'Data Analysis', 'slug'=> 'data-analysis', 'category_id' => $category->id]);
        Topic::create(['name'=>'Deep Learning', 'slug'=> 'deep-learning', 'category_id' => $category->id]);
        Topic::create(['name'=>'Artificial Intelligence', 'slug'=> 'artificial-intelligence', 'category_id' => $category->id]);
        Topic::create(['name'=>'R (programming language)', 'slug'=> 'r-programming-language', 'category_id' => $category->id]);
        Topic::create(['name'=>'Statistics', 'slug'=> 'statistics', 'category_id' => $category->id]);
        Topic::create(['name'=>'Natural Language Processing', 'slug'=> 'natural-language-processing', 'category_id' => $category->id]);

        $category = Category::find(16);
        Topic::create(['name'=>'Google Flutter', 'slug'=>'google-flutter', 'category_id' => $category->id]);
        Topic::create(['name'=>'iOS Development', 'slug'=>'ios-development', 'category_id' => $category->id]);
        Topic::create(['name'=>'Android Development', 'slug'=>'android-development', 'category_id' => $category->id]);
        Topic::create(['name'=>'Swift', 'slug'=>'swift', 'category_id' => $category->id]);
        Topic::create(['name'=>'React Native', 'slug'=>'react-native', 'category_id' => $category->id]);
        Topic::create(['name'=>'Dart (programming language)', 'slug'=>'dart-programming-language', 'category_id' => $category->id]);
        Topic::create(['name'=>'Kotlin', 'slug'=>'kotlin', 'category_id' => $category->id]);
        Topic::create(['name'=>'SwiftUI', 'slug'=>'swiftui', 'category_id' => $category->id]);
        Topic::create(['name'=>'Mobile App Development', 'slug'=>'mobile-app-development', 'category_id' => $category->id]);

        $category = Category::find(17);
        Topic::create(['name'=>'Python', 'slug'=>'python', 'category_id' => $category->id]);
        Topic::create(['name'=>'Java', 'slug'=>'java', 'category_id' => $category->id]);
        Topic::create(['name'=>'C#', 'slug'=>'c-sharp', 'category_id' => $category->id]);
        Topic::create(['name'=>'React', 'slug'=>'react', 'category_id' => $category->id]);
        Topic::create(['name'=>'C++', 'slug'=>'c-plus-plus', 'category_id' => $category->id]);
        Topic::create(['name'=>'JavaScript', 'slug'=>'javascript', 'category_id' => $category->id]);
        Topic::create(['name'=>'Go (programming language)', 'slug'=>'go-programming-language', 'category_id' => $category->id]);
        Topic::create(['name'=>'C (programming language)', 'slug'=>'c-programming-language', 'category_id' => $category->id]);
        Topic::create(['name'=>'Spring Framework', 'slug'=>'spring-framework', 'category_id' => $category->id]);

    }
}
