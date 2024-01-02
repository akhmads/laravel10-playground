<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'type' => 'post',
            'title' => 'What is Alpin JS? Your new, lightweight, JavaScript framework',
            'slug' => Str::slug('What is Alpin JS? Your new, lightweight, JavaScript framework'),
            'content' => '<p>Alpin JS is a modern and lightweight JavaScript framework that enables developers to build web applications with ease. It is designed to be fast, flexible, and easy to learn, making it an ideal choice for web developers of all skill levels.</p>
            <p>One of the key features of Alpin JS is its modular architecture, which allows developers to easily add or remove features as needed. This makes it easy to create customized applications that meet specific requirements. In addition, Alpin JS comes with a wide range of built-in features and tools, including data binding, templates, and routing.</p>
            <p>Alpin JS is also designed to be compatible with a wide range of web technologies, such as HTML, CSS, and other JavaScript libraries. This makes it a versatile framework that can be used for a variety of different applications, from simple single-page websites to complex web applications with multiple pages and features.</p>
            <p>Finally, Alpin JS is backed by a vibrant and active community of developers, who are constantly contributing new features, bug fixes, and improvements to the framework. This ensures that Alpin JS is always up-to-date and evolving to meet the changing needs of the web development industry.</p>
            <p>Overall, Alpin JS is a powerful and flexible JavaScript framework that is well-suited for a wide range of web development projects. Whether you are a beginner or an experienced developer, Alpin JS is a great choice for building modern and responsive web applications.</p>',
            'user_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('posts')->insert([
            'type' => 'post',
            'title' => 'Laravel: The PHP Framework for Web Artisans',
            'slug' => Str::slug('Laravel: The PHP Framework for Web Artisans'),
            'content' => '<p>Laravel is a free, open-source PHP web application framework designed to make web development easier and faster. It was created by Taylor Otwell in 2011 and has become one of the most popular PHP frameworks in recent years.</p>
            <p>Laravel leverages the latest PHP features and follows modern development practices, making it easy to build scalable and maintainable web applications. It includes many built-in tools and features that allow developers to focus on writing clean, reusable code rather than worrying about boilerplate code.</p>
            <p>One of the key features of Laravel is its elegant syntax, which makes it easy to read and write code. It also includes a robust set of helpers and classes that simplify common tasks, such as database management, routing, and authentication.</p>
            <p>Laravel is built on top of several popular PHP libraries, such as Symfony, which provides a solid foundation for building web applications. It also includes its own set of components, such as the Blade templating engine and the Eloquent ORM, which make it easy to work with databases and create dynamic views.</p>
            <p>Overall, Laravel is a powerful framework for building modern web applications. It provides developers with the tools they need to create high-quality, maintainable code quickly and easily.</p>',
            'user_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('posts')->insert([
            'type' => 'post',
            'title' => 'Tailwind CSS: The Ultimate CSS Framework',
            'slug' => Str::slug('Tailwind CSS: The Ultimate CSS Framework'),
            'content' => '<p>Are you tired of writing custom CSS code for your web projects? Are you looking for a faster and more efficient way to style your website? Look no further than Tailwind CSS!</p>
            <p>Tailwind CSS is a utility-first CSS framework that provides a set of pre-defined classes that can be used to style HTML elements. With Tailwind CSS, you can easily create complex layouts and designs without writing a single line of custom CSS code.</p>
            <p>One of the main benefits of using Tailwind CSS is its flexibility. The framework allows you to customize the styling of your website by simply modifying the pre-defined classes. This means that you can create a unique look and feel for your website without having to write a lot of custom CSS code.</p>
            <p>Another advantage of using Tailwind CSS is its speed. Since the framework uses pre-defined classes, it can significantly reduce the amount of CSS code that needs to be loaded by your website. This can lead to faster load times and a better user experience for your visitors.</p>
            <p>Tailwind CSS also includes a variety of responsive design classes that can be used to create mobile-friendly websites. These classes allow you to easily adjust the styling of your website for different screen sizes, without having to write a lot of custom CSS code.</p>
            <p>In addition to its flexibility and speed, Tailwind CSS also has a large and active community of users. This means that you can easily find support and resources for using the framework, including tutorials, documentation, and third-party plugins.</p>
            <p>Overall, Tailwind CSS is a powerful and efficient CSS framework that can help you create professional-looking websites in less time. Whether you\'re a beginner or an experienced web developer, Tailwind CSS is definitely worth checking out!</p>',
            'user_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('posts')->insert([
            'type' => 'post',
            'title' => 'CodeIgniter: The small framework with powerful features',
            'slug' => Str::slug('CodeIgniter: The small framework with powerful features'),
            'content' => '<p>Codeigniter is a popular PHP web application framework that is used for developing dynamic websites. It is an open-source framework that follows the Model-View-Controller (MVC) architecture pattern. Codeigniter is known for its speed, simplicity, and flexibility, which makes it a popular choice among PHP developers.</p>
            <p>One of the great features of Codeigniter is its lightweight core. The framework is designed to be lean and efficient, while still providing developers with all the tools they need to build robust web applications. Codeigniter also has a small footprint, which means it can run on most hosting platforms without any issues.</p>
            <p>Another advantage of Codeigniter is its extensive documentation. The framework has a well-documented user guide that provides developers with detailed information on how to use the framework and its various features. The user guide also includes a wealth of examples and tutorials that help developers get up to speed quickly.</p>
            <p>Codeigniter has a large and active community of developers who contribute to the framework. The community provides support, plugins, and add-ons that extend the functionality of the framework. This means that developers can easily find solutions to common problems and add new features to their applications without having to reinvent the wheel.</p>
            <p>In conclusion, Codeigniter is a powerful and flexible PHP web application framework that is well-suited for developing dynamic websites. Its lightweight core, extensive documentation, and active community make it a popular choice among PHP developers. If you are looking for a reliable and efficient framework for your next web project, Codeigniter is definitely worth considering.</p>',
            'user_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('posts')->insert([
            'type' => 'post',
            'title' => 'Manfaat Mempelajari Bahasa Inggris di Era Globalisasi',
            'slug' => Str::slug('Manfaat Mempelajari Bahasa Inggris di Era Globalisasi'),
            'content' => '<p>Bahasa Inggris merupakan bahasa internasional yang bersifat universal, bahasa Inggris sudah disepakati sebagai bahasa yang digunakan untuk berkomunikasi antar manusia hampir diseluruh dunia. Beberapa negara adidaya seperti Amerika Serikat, Inggris Raya, dan Singapura telah menjadikan bahasa Inggris sebagai bahasa utama dan bahasa yang resmi.</p>
            <p>Mengingat negara negara tersebut menguasai perekonomian dunia, hal ini yang menjadikan perkembangan bahasa Inggris semakin meningkat dan banyak di pelajari di berbagai negara, termasuk di negara kita yaitu negara Indonesia.</p>
            <p>Selain sebagai alat komunikasi dengan warga negara asing, mempelajari bahasa Inggris juga dapat memberikan manfaat lain, salah satu nya adalah menambah daya saing seseorang karena dianggap lebih kompeten dan berwawasan luas.</p>
            <p>Tidak sedikit perusahaan Internasional yang membutuhkan hasil sertifikasi bahasa seperti TOEFL atau semacam nya sebagai salah satu kualifikasi yang dibutuhkan untuk bekerja di perusahaan tersebut.</p>
            <p>Walaupun begitu, banyak orang yang masih meremehkan dan meragukan pentingnya mempelajari bahasa asing khususnya bahasa Inggris. Padahal tidak ada salahnya untuk mencoba hal baru termasuk mempelajari bahasa Inggris yang memiliki segudang manfaat terutama di era globalisasi seperti sekarang.</p>',
            'user_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
