<?php

use Illuminate\Database\Seeder;

class GeneratedAboutGicTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('about_gic')->delete();
        
        \DB::table('about_gic')->insert(array (
            0 => 
            array (
                'id' => 1,
                'location_map' => '<iframe src="https://www.google.com/maps/embed?pb=" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
                'facebook_page' => 'https://www.facebook.com/dept.dice.itc/',
                'youtube_url' => 'https://www.youtube.com/channel/UCojYsgDYb92lQoV0lpz-jvQ',
                'twitter_url' => NULL,
                'instagram_url' => NULL,
                'linkedin_url' => NULL,
                'contact_email' => 'itc.gicinfo@gmail.com',
                'contact_phone' => '023 5555942',
            'about_us_text_en' => '<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;">Founded in 1998, the <strong>Department of Information and Communication Engineering</strong>, also known as <strong>D&eacute;partement de G&eacute;nie d&rsquo;Informatique et Communication</strong> (GIC) in French, has formed more than one thousand engineers and technicians in computer science who are now participating actively in the development of both public and private sectors.</p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;">Our programs are built based on a very solid curriculum which covers fundamental theories in computer science and information technologies. Upon completion of the programs, students will be able to gain technical expertise consisting of critical thinking and problem solving skills involving analysis, design, implementation, and evaluation of computer-based systems. The programs also give an introduction to research in advanced domains, such as image processing, natural language processing, artificial intelligence, machine learning and distributed system. In addition to the technical competency, our programs are enhanced with soft skill development through teamwork tasks in class and obligatory internships to a real working environment for the readiness of the students into their professional life.</p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;">Our research unit has been working on a variety of research fields consisting of data science and processing of natural language focusing on Khmer including OCR (Optical Character Recognition), ASR (Automatic Speech Recognition), MT (Machine Translation), and TTS (Text to Speech). We have been working in these domains for decades with both local and international partners.</p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;">We are working on an ASEAN Cyber University project supported by KOICA to produce high quality e-learning courses which have been used at ITC and other universities in Cambodia under the blended learning strategy. All courses are developed by qualified teams (Instructional Design, Content Development, Studio Engineer, and Subject Matter Experts) trained by experts from South Korea and Cambodia.</p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;">In 2013, the department started a Master program of Computer Science in Mobile Technology. This program focuses on technologies, development, and research related to mobile applications such as application development on iOS and Android, Mobile Ecosystem, Mobile Network, Data Security, Data Mining and Big Data. We have helped organize many ICT events, such as ICT Career Expo, Barcamp Phnom Penh, Mobile Camp Asia, Techno Innovation Challenge, Technovation Cambodia.</p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>',
            'about_us_text_kh' => '<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;"><span style="color: #000000; font-family: Verdana;"><span style="font-size: 14.6667px; white-space: pre-wrap;">Founded in 1998, the <strong>Department of Information and Communication Engineering</strong>, also known as D&eacute;partement de <strong>G&eacute;nie d&rsquo;Informatique et Communication</strong> (GIC) in French, has formed more than one thousand engineers and technicians in computer science who are now participating actively in the development of both public and private sectors.</span></span></p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;"><span style="color: #000000; font-family: Verdana;"><span style="font-size: 14.6667px; white-space: pre-wrap;">Our programs are built based on a very solid curriculum which covers fundamental theories in computer science and information technologies. Upon completion of the programs, students will be able to gain technical expertise consisting of critical thinking and problem solving skills involving analysis, design, implementation, and evaluation of computer-based systems. The programs also give an introduction to research in advanced domains, such as image processing, natural language processing, artificial intelligence, machine learning and distributed system. In addition to the technical competency, our programs are enhanced with soft skill development through teamwork tasks in class and obligatory internships to a real working environment for the readiness of the students into their professional life.</span></span></p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;"><span style="color: #000000; font-family: Verdana;"><span style="font-size: 14.6667px; white-space: pre-wrap;">&nbsp;</span></span></p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;"><span style="color: #000000; font-family: Verdana;"><span style="font-size: 14.6667px; white-space: pre-wrap;">Our research unit has been working on a variety of research fields consisting of data science and processing of natural language focusing on Khmer including OCR (Optical Character Recognition), ASR (Automatic Speech Recognition), MT (Machine Translation), and TTS (Text to Speech). We have been working in these domains for decades with both local and international partners.</span></span></p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;"><span style="color: #000000; font-family: Verdana;"><span style="font-size: 14.6667px; white-space: pre-wrap;">We are working on an ASEAN Cyber University project supported by KOICA to produce high quality e-learning courses which have been used at ITC and other universities in Cambodia under the blended learning strategy. All courses are developed by qualified teams (Instructional Design, Content Development, Studio Engineer, and Subject Matter Experts) trained by experts from South Korea and Cambodia.</span></span></p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;"><span style="color: #000000; font-family: Verdana;"><span style="font-size: 14.6667px; white-space: pre-wrap;">In 2013, the department started a Master program of Computer Science in Mobile Technology. This program focuses on technologies, development, and research related to mobile applications such as application development on iOS and Android, Mobile Ecosystem, Mobile Network, Data Security, Data Mining and Big Data. We have helped organize many ICT events, such as ICT Career Expo, Barcamp Phnom Penh, Mobile Camp Asia, Techno Innovation Challenge, Technovation Cambodia.</span></span></p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>
<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>',
                'mission_en' => '<p><span style="color: #000000;">Our main mission is to produce highly qualified graduates from both undergraduate and higher education in computer science. Meanwhile, we also focus on both providing professional ethics and encouraging patriotism.&nbsp;</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;">Students gain not only hard skills but also related soft skills such as communication and teamwork, which are very important in working environment. As a result, most of our graduates get their successful careers both in public and private sectors. For instance, our alumni are working as IT professionals, researchers, lecturers, entrepreneurs, and consultants. Some of them are running their startups or businesses. Some have become the workforce for the government, academic sectors and research institutions, and others have been working in various private business sectors such as IT software solution, network solution, telecommunication, IT infrastructure, Media and broadcasting, finance and banking, business intelligence, security exchange, transportation, etc.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>',
                'mission_kh' => '<p>Our main mission is to produce highly qualified graduates from both undergraduate and higher education in computer science. Meanwhile, we also focus on both providing professional ethics and encouraging patriotism.&nbsp;</p>
<p>&nbsp;</p>
<p>Students gain not only hard skills but also related soft skills such as communication and teamwork, which are very important in working environment. As a result, most of our graduates get their successful careers both in public and private sectors. For instance, our alumni are working as IT professionals, researchers, lecturers, entrepreneurs, and consultants. Some of them are running their startups or businesses. Some have become the workforce for the government, academic sectors and research institutions, and others have been working in various private business sectors such as IT software solution, network solution, telecommunication, IT infrastructure, Media and broadcasting, finance and banking, business intelligence, security exchange, transportation, etc.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>',
                'vision_en' => '<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;"><span style="color: #000000; font-family: Verdana;"><span style="font-size: 14.6667px; white-space: pre-wrap;">Our vision is to:</span></span></p>
<ul>
<li dir="ltr" style="line-height: 1.656;"><span style="color: #000000; font-family: Verdana;"><span style="font-size: 14.6667px; white-space: pre-wrap;">Actively participate in human resource development in ICT.</span></span></li>
<li dir="ltr" style="line-height: 1.656;"><span style="color: #000000; font-family: Verdana;"><span style="font-size: 14.6667px; white-space: pre-wrap;">Contribute in the development of related domains.</span></span></li>
<li dir="ltr" style="line-height: 1.656;"><span style="color: #000000; font-family: Verdana;"><span style="font-size: 14.6667px; white-space: pre-wrap;">Contribute in the development of higher education of the country.</span></span></li>
<li dir="ltr" style="line-height: 1.656;"><span style="color: #000000; font-family: Verdana;"><span style="font-size: 14.6667px; white-space: pre-wrap;">Conduct fruitful research that meet the needs of the country.</span></span></li>
</ul>
<p>&nbsp;</p>',
                'vision_kh' => '<p dir="ltr" style="line-height: 1.656; margin-top: 0pt; margin-bottom: 0pt;"><span style="color: #000000; font-family: Verdana;"><span style="font-size: 14.6667px; white-space: pre-wrap;">Our vision is to:</span></span></p>
<ul>
<li dir="ltr" style="line-height: 1.656;"><span style="color: #000000; font-family: Verdana;"><span style="font-size: 14.6667px; white-space: pre-wrap;">Actively participate in human resource development in ICT.</span></span></li>
<li dir="ltr" style="line-height: 1.656;"><span style="color: #000000; font-family: Verdana;"><span style="font-size: 14.6667px; white-space: pre-wrap;">Contribute in the development of related domains.</span></span></li>
<li dir="ltr" style="line-height: 1.656;"><span style="color: #000000; font-family: Verdana;"><span style="font-size: 14.6667px; white-space: pre-wrap;">Contribute in the development of higher education of the country.</span></span></li>
<li dir="ltr" style="line-height: 1.656;"><span style="color: #000000; font-family: Verdana;"><span style="font-size: 14.6667px; white-space: pre-wrap;">Conduct fruitful research that meet the needs of the country.</span></span></li>
</ul>',
                'created_at' => '2019-05-17 13:44:56',
                'updated_at' => '2019-08-29 06:02:08',
            ),
        ));
        
        
    }
}