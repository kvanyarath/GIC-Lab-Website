<?php

use Illuminate\Database\Seeder;

class GeneratedSiteContentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('site_contents')->delete();
        
        \DB::table('site_contents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'developer_name' => 'future_students',
                'html_text' => '<h2 style="padding-left: 80px;">What to expect:</h2>
<ul>
<li style="list-style-type: none;">
<ul>
<li style="list-style-type: none;">
<ul>
<li><span style="font-size: 14pt;">Qualified, kind, helpful and caring <strong>teachers</strong></span></li>
<li><span style="font-size: 14pt;">Friendly and helpful <strong>seniors</strong></span></li>
<li><span style="font-size: 14pt;">768 hours of courses and practical work for year three, mostly basic courses for building <strong>strong foundation</strong> in computer science</span></li>
<li><span style="font-size: 14pt;">4 <strong>elearing</strong> course.</span></li>
</ul>
</li>
</ul>
</li>
</ul>
<h2 style="padding-left: 80px;">How to make yourself ready:</h2>
<ul>
<li style="list-style-type: none;">
<ul>
<li style="list-style-type: none;">
<ul>
<li><span style="font-size: 14pt;">Get <strong>familiar with ICT</strong> by using them, and observe them. It may help you to understand the concept of the course and example with less effort.</span></li>
<li><span style="font-size: 14pt;">Make sure you can understand basic <strong>English</strong> and English used in ICT as most of the course material are in English.</span></li>
<li><span style="font-size: 14pt;">Recall <strong>Informatique</strong> course you have learned in I1.</span></li>
<li><span style="font-size: 14pt;">Be <strong>passionate</strong> about computer science. Even you don\'t, fake it until you make it.</span></li>
<li><span style="font-size: 14pt;">Start to learn from material you can find on the <strong>Internet</strong> (e.g. Python for beginner) as it will become an important part of your professional life</span>.</li>
</ul>
</li>
</ul>
</li>
</ul>
<h2 style="padding-left: 80px;">Some guideline for learning:</h2>
<ul>
<li style="list-style-type: none;">
<ul>
<li style="list-style-type: none;">
<ul>
<li><span style="font-size: 14pt;"><strong>Participate</strong> very class. If you miss one, ask your classmate for wrapup.</span></li>
<li><span style="font-size: 14pt;"><strong>Ask</strong> questions even you think it\'s naive or childish.</span></li>
<li><span style="font-size: 14pt;">Do all the <strong>works</strong> teach give and participate actively in class.</span></li>
<li><span style="font-size: 14pt;">Try to <strong>help</strong> your classmate as much as you can.</span></li>
<li><span style="font-size: 14pt;"><strong>Ask for help</strong> from classmate, seniors and teachers if you need.</span></li>
<li><span style="font-size: 14pt;"><strong>Translate</strong> all new keywords. It will help you understand next lesson easier.</span></li>
</ul>
</li>
</ul>
</li>
</ul>
<h2 style="padding-left: 80px;">What to expect for your professional life:</h2>
<ul>
<li style="list-style-type: none;">
<ul>
<li style="list-style-type: none;">
<ul>
<li><span style="font-size: 14pt;">You can work directly in ICT domain, such as programming, network administrating, system administrating, database administrating, researcher, etc. Or work in other domains that involve with ICT, such as business intelligence, data analysis, manufacturing, etc.</span></li>
<li><span style="font-size: 14pt;">The <strong>salary</strong> for fresh graduate ranges from 350 to 500 USD. You can earn up to 700 to 1000 USD after two years.</span></li>
</ul>
</li>
</ul>
</li>
</ul>',
                'created_at' => '2019-06-13 11:27:00',
                'updated_at' => '2019-09-05 08:59:00',
            ),
            1 => 
            array (
                'id' => 2,
                'developer_name' => 'academic_programs',
                'html_text' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'created_at' => '2019-06-13 11:27:55',
                'updated_at' => '2019-06-13 11:27:55',
            ),
            2 => 
            array (
                'id' => 3,
                'developer_name' => 'teaching_methodologies',
                'html_text' => '<p style="text-align: left;">We give each lecturer the right to choose their teaching methodology base on their course content. At GIC we embrace <strong>diversity</strong>, and try our best to give students a very <strong>friendly</strong> learning environment. We have recently adapt our curriculum into <strong>Outcome Based Curriculum</strong>.</p>
<p style="text-align: left;">Some theorical courses adopt the <strong>classic Classroom</strong> enhancing by a lot of <strong>practical works and project</strong>. We also use <strong>Flip Classroom</strong>, which allows students enough time for discussion, group activity and team work, in all of our E-learning courses. We also implement <strong>Project Based</strong> learning into some of our courses. In this approach, lecturers from two or three course will sit together and <strong>define one project</strong> that requires students to use the knowledge and skills they have learn from all the subjects in questions to <strong>complete</strong>.</p>
<p style="text-align: left;">The same as other departments at ITC, our evaluation system bases on student\'s <strong>attendance, class participation, assignments, test, exam, practical work </strong>and<strong> project.</strong></p>',
                'created_at' => '2019-06-13 11:28:00',
                'updated_at' => '2019-09-05 08:56:32',
            ),
            3 => 
            array (
                'id' => 4,
                'developer_name' => 'career_opportunities',
                'html_text' => '<h2 style="padding-left: 80px;">What to expect for your professional life:</h2>
<ul>
<li style="list-style-type: none;">
<ul>
<li style="list-style-type: none;">
<ul>
<li>You can work directly in ICT domain, such as programming, network administrating, system administrating, database administrating, researcher, etc. Or work in other domains that involve with ICT, such as business intelligence, data analysis, manufacturing, etc.</li>
<li>The&nbsp;<strong>salary</strong>&nbsp;for fresh graduate ranges from 350 to 500 USD. You can earn up to 700 to 1000 USD after two years.</li>
</ul>
</li>
</ul>
</li>
</ul>
<h2 style="padding-left: 80px;">Work abroad:</h2>
<ul>
<li style="list-style-type: none;">
<ul>
<li style="list-style-type: none;">
<ul>
<li>GIC provide strong curriculum that allow students enough foundation to learn new thing and adapt with new envirnment easily. Some of our alunmis are now working in both regional and internation company.</li>
</ul>
</li>
</ul>
</li>
</ul>
<h2 style="padding-left: 80px;">Work with GIC:</h2>
<p style="padding-left: 80px;">If you are interested in working in academic, you can be:</p>
<ul>
<li style="list-style-type: none;">
<ul>
<li style="list-style-type: none;">
<ul>
<li>Researcher: GIC has two lap in <strong>Natural Language Processing</strong> and <strong>Data Analysis</strong>. We are building our human resource in <strong>Partern Recognition</strong> and <strong>Face Recognition</strong></li>
<li>Lecturer: Being a lecturer at GIC, one not only gives course, but also can involve in search and development project which keeps one up to date to the current technology.</li>
<li>Developer: We hire developer to work in both research and development projects from mostly public sector.</li>
</ul>
</li>
</ul>
</li>
</ul>',
                'created_at' => '2019-06-13 11:28:00',
                'updated_at' => '2019-09-05 08:59:50',
            ),
            4 => 
            array (
                'id' => 5,
                'developer_name' => 'publications',
                'html_text' => '<table style="height: 600px; border-collapse: collapse; width: 681pt; border-style: solid;" border="1" width="681pt" cellspacing="02" cellpadding="2"><colgroup><col style="mso-width-source: userset; mso-width-alt: 1865; width: 38pt;" width="51" /> <col style="mso-width-source: userset; mso-width-alt: 3035; width: 62pt;" width="83" /> <col style="mso-width-source: userset; mso-width-alt: 28342; width: 581pt;" width="775" /> </colgroup>
<tbody>
<tr style="height: 15px;">
<td class="xl64" style="height: 15px; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Year&quot;}"><strong>Year</strong></td>
<td class="xl64" style="border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Type&quot;}"><strong>Type</strong></td>
<td class="xl64" style="border-left: none; width: 773px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Publications&quot;}"><strong>Publications</strong></td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2013}">2013</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Journal&quot;}">Journal</td>
<td class="xl66" style="border-top: none; border-left: none; border-right: transparent; overflow: visible; padding-bottom: 0px; padding-top: 0px; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Sethserey, S., Albert, T.M., JosepLluis R.E. (2013). Using cache to optimize question wave social search agents, Techno-Science Research Journal, Vol. 01, pp: 25-30.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Sethserey, S., Albert, T.M., JosepLluis R.E. (2013). Using cache to optimize question wave social search agents, Techno-Science Research Journal, Vol. 01, pp: 25-30.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2013}">2013</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Journal&quot;}">Journal</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Seangmeng, L. (2013). Improving Recognition Result Using Character Trigram for Khmer OCR, Techno-Science Research Journal, Vol. 01, pp: 31-33&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Seangmeng, L. (2013). Improving Recognition Result Using Character Trigram for Khmer OCR, Techno-Science Research Journal, Vol. 01, pp: 31-33</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2013}">2013</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Journal&quot;}">Journal</td>
<td class="xl66" style="border-top: none; border-left: none; border-right: transparent; overflow: visible; padding-bottom: 0px; padding-top: 0px; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Annanda Thavymony RATH and Jean-No&euml;l Colin. Towards purpose enforcement model for privacy-aware usage control policy in distributed healthcare. Int. J. Secur. Netw. 8, 2 (Aug. 2013), 94-105. Volume 8, Issue 2, DOI: 10.1504/IJSN.2013.055943.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Annanda Thavymony RATH and Jean-No&euml;l Colin. Towards purpose enforcement model for privacy-aware usage control policy in distributed healthcare. Int. J. Secur. Netw. 8, 2 (Aug. 2013), 94-105. Volume 8, Issue 2, DOI: 10.1504/IJSN.2013.055943.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2013}">2013</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl66" style="border-top: none; border-left: none; border-right: transparent; overflow: visible; padding-bottom: 0px; padding-top: 0px; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Sopheap, S., Sethserey, S. Flipped classroom: a case study in engineering program, e-Learning Korea 2013 conference, Korea, 3-5 September 2013&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Sopheap, S., Sethserey, S. Flipped classroom: a case study in engineering program, e-Learning Korea 2013 conference, Korea, 3-5 September 2013</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2013}">2013</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Chhun, S., Moalla, N., &amp; Ouzrout, Y. (2013). &ldquo;Model-Based Service Orchestration for Business Applications Re-Engineering&rdquo;, a publication of the International Council on Systems Engineering, volume 16, issue 4, pp. 28-29&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Chhun, S., Moalla, N., &amp; Ouzrout, Y. (2013). &ldquo;Model-Based Service Orchestration for Business Applications Re-Engineering&rdquo;, a publication of the International Council on Systems Engineering, volume 16, issue 4, pp. 28-29</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2013}">2013</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Annanda Thavymony RATH and Jean-No&euml;l Colin. &ldquo;Towards enforcement of purpose for privacy policy in distributed healthcare&rdquo;. The third IEEE International Conference on Consumer eHealth Platforms, Services and Applications (CeHPSA), IEEE CCNC 2013. Las Vegas, NV, USA.  DOI: 10.1109/CCNC.2013.6488578, Print ISBN:978-1-4673-3131-9.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Annanda Thavymony RATH and Jean-No&euml;l Colin. &ldquo;Towards enforcement of purpose for privacy policy in distributed healthcare&rdquo;. The third IEEE International Conference on Consumer eHealth Platforms, Services and Applications (CeHPSA), IEEE CCNC 2013. Las Vegas, NV, USA. DOI: 10.1109/CCNC.2013.6488578, Print ISBN:978-1-4673-3131-9.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2013}">2013</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Annanda Thavymony RATH and Jean-No&euml;l Colin. &ldquo;Access and Usage Control requirements for Patient Controlled Record type of Healthcare Information System&rdquo;, International Conference on Health Informatics (HEALTHINF) 2013, Barcelona, Spain. pp. 331-336.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Annanda Thavymony RATH and Jean-No&euml;l Colin. &ldquo;Access and Usage Control requirements for Patient Controlled Record type of Healthcare Information System&rdquo;, International Conference on Health Informatics (HEALTHINF) 2013, Barcelona, Spain. pp. 331-336.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2013}">2013</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Annanda Thavymony RATH and Jean-No&euml;l Colin. &ldquo;A purpose model and policy enforcement engine for usage control in distributed healthcare information system&rdquo;, International Conference on Health Informatics (HEALTHINF) 2013, Barcelona, Spain. pp. 174-180.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Annanda Thavymony RATH and Jean-No&euml;l Colin. &ldquo;A purpose model and policy enforcement engine for usage control in distributed healthcare information system&rdquo;, International Conference on Health Informatics (HEALTHINF) 2013, Barcelona, Spain. pp. 174-180.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2013}">2013</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Annanda Thavymony RATH and Jean-No&euml;l Colin. &ldquo;Modelling and Expressing Purpose Validation Policy for Privacy-aware Usage Control in Distributed Environment&rdquo;. 4e Atelier sur la Protection de la Vie Priv&eacute; (APVP) (4th Workshop on the Protection of Privacy). Les Loges en Josas, 17-19 June 2013, France.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Annanda Thavymony RATH and Jean-No&euml;l Colin. &ldquo;Modelling and Expressing Purpose Validation Policy for Privacy-aware Usage Control in Distributed Environment&rdquo;. 4e Atelier sur la Protection de la Vie Priv&eacute; (APVP) (4th Workshop on the Protection of Privacy). Les Loges en Josas, 17-19 June 2013, France.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2014}">2014</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Laurent Besacier, B Lecouteux, Ngoc-Quang Luong, K Hour, M Hadjsalah. WORD CONFIDENCE ESTIMATION FOR SPEECH TRANSLATION. International Workshop on Spoken Language Translation, Dec 2014, Lake Tahoe, United States. 2014. &lt;hal-01110393&gt;&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Laurent Besacier, B Lecouteux, Ngoc-Quang Luong, K Hour, M Hadjsalah. WORD CONFIDENCE ESTIMATION FOR SPEECH TRANSLATION. International Workshop on Spoken Language Translation, Dec 2014, Lake Tahoe, United States. 2014. &lt;hal-01110393&gt;</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2014}">2014</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl68" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Annanda Thavymony RATH and Jean-No&euml;l Colin. &ldquo;Modelling and Expressing Purpose Validation Policy for Privacy-aware Usage Control in Distributed Environment&rdquo;. The 8th ACM IMCOM, International Conference on Ubiquitous Information Management and Communication, January 9-11 2014, Siem Reap, Cambodia. ISBN: 978-1-4503-2644-5, DOI:10.1145/2557977.2557991. Chhun, S., Moalla, N., &amp; Ouzrout, Y. (2014). &ldquo;Ontology-Based Approach for Semantic Service Selection in Business Process Re-Engineering&rdquo;, I-ESA&rsquo;14, In Enterprise Interoperability VI (pp. 63-73). Springer International Publishing.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;"><a href="http://dx.doi.org/10.1145/2557977.2557991" target="_blank" rel="noopener">Annanda Thavymony RATH and Jean-No&euml;l Colin. &ldquo;Modelling and Expressing Purpose Validation Policy for Privacy-aware Usage Control in Distributed Environment&rdquo;. The 8th ACM IMCOM, International Conference on Ubiquitous Information Management and Communication, January 9-11 2014, Siem Reap, Cambodia. ISBN: 978-1-4503-2644-5, DOI:10.1145/2557977.2557991. Chhun, S., Moalla, N., &amp; Ouzrout, Y. (2014). &ldquo;Ontology-Based Approach for Semantic Service Selection in Business Process Re-Engineering&rdquo;, I-ESA&rsquo;14, In Enterprise Interoperability VI (pp. 63-73). Springer International Publishing.</a></div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2014}">2014</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Samboeun HEAN, Kimheng SOK (2014) Using Flipped Methodology for Teaching and Learning in Engineering Program: Case Study in ITC, Cambodia. In ICET 2014 Conference, Seoul, Korea.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Samboeun HEAN, Kimheng SOK (2014) Using Flipped Methodology for Teaching and Learning in Engineering Program: Case Study in ITC, Cambodia. In ICET 2014 Conference, Seoul, Korea.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2014}">2014</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Wautelet, Yves, Samedi Heng, Manuel Kolp, and Isabelle Mirbel. \\&quot;Unifying and Extending User Story Models.\\&quot; In Advanced Information Systems Engineering, pp. 211-225. Springer International Publishing, 2014.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Wautelet, Yves, Samedi Heng, Manuel Kolp, and Isabelle Mirbel. "Unifying and Extending User Story Models." In Advanced Information Systems Engineering, pp. 211-225. Springer International Publishing, 2014.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2014}">2014</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;S. Kheang, K. Katsurada, Y. Iribe, and T. Nitta, &ldquo;Novel Two-Stage Model for Grapheme-to-Phoneme Conversion using New Grapheme Generation Rules,&rdquo; in Proc. of ICAICTA, (Bandung, Indonesia), pp. 110-115, August 2014.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">S. Kheang, K. Katsurada, Y. Iribe, and T. Nitta, &ldquo;Novel Two-Stage Model for Grapheme-to-Phoneme Conversion using New Grapheme Generation Rules,&rdquo; in Proc. of ICAICTA, (Bandung, Indonesia), pp. 110-115, August 2014.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2014}">2014</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Journal&quot;}">Journal</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Chhun, S., Moalla, N., &amp; Ouzrout, Y. (2014). &ldquo;QoS ontology for service selection and reuse&rdquo;, Journal of Intelligent Manufacturing, doi:10.1007/s10845-013-0855-6, Springer US, pp. 1-13.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Chhun, S., Moalla, N., &amp; Ouzrout, Y. (2014). &ldquo;QoS ontology for service selection and reuse&rdquo;, Journal of Intelligent Manufacturing, doi:10.1007/s10845-013-0855-6, Springer US, pp. 1-13.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2014}">2014</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Journal&quot;}">Journal</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Catherine PAPETTI, Kimheng SOK, Serge MIRANDA et Gregory GALLI (2014). Chapitre 3. Une application de gestion de tags pour le tourisme mobiquitaire: Application au projet Thom au Cambodge. In Immat&eacute;riel Touristique (pp. 139-158). France: ISBN: 978-2-343-03087, L\'Harmattan.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Catherine PAPETTI, Kimheng SOK, Serge MIRANDA et Gregory GALLI (2014). Chapitre 3. Une application de gestion de tags pour le tourisme mobiquitaire: Application au projet Thom au Cambodge. In Immat&eacute;riel Touristique (pp. 139-158). France: ISBN: 978-2-343-03087, L\'Harmattan.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2014}">2014</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Journal&quot;}">Journal</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;S. Kheang, K. Katsurada, Y. Iribe, and T. Nitta, &ldquo;New grapheme generation rules for two-stage model-based grapheme-to-phoneme conversion,&rdquo; Journal of ICT Research and Applications, vol. 8, no. 2, pp. 157-174, 2014.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">S. Kheang, K. Katsurada, Y. Iribe, and T. Nitta, &ldquo;New grapheme generation rules for two-stage model-based grapheme-to-phoneme conversion,&rdquo; Journal of ICT Research and Applications, vol. 8, no. 2, pp. 157-174, 2014.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2014}">2014</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Journal&quot;}">Journal</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;S. Kheang, K. Katsurada, Y. Iribe, and T. Nitta, &ldquo;Solving the phoneme conflict in grapheme-to-phoneme conversion using a two-stage neural network-based approach,&rdquo; IEICE Transactions on Information and Systems, vol. E97-D, pp. 901-910, April 2014.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">S. Kheang, K. Katsurada, Y. Iribe, and T. Nitta, &ldquo;Solving the phoneme conflict in grapheme-to-phoneme conversion using a two-stage neural network-based approach,&rdquo; IEICE Transactions on Information and Systems, vol. E97-D, pp. 901-910, April 2014.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2015}">2015</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Annanda Thavymony RATH and Jean-No&euml;l Colin. &ldquo;Protecting Personal Data: Access Control for Privacy Preserving Perimeter Protection System&rdquo;. The 29th Annual International Federation for Information Processing (IFIP), WG 11.3 Working Conference on Data and Applications Security and Privacy, Fairfax, VA, USA , July 13-15, 2015.\\nThis paper will also be a part of a book (Chapter 16) published in Springer 2015. ISBN:    978-3-319-20809-1, Book ID: 340025_1_En.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Annanda Thavymony RATH and Jean-No&euml;l Colin. &ldquo;Protecting Personal Data: Access Control for Privacy Preserving Perimeter Protection System&rdquo;. The 29th Annual International Federation for Information Processing (IFIP), WG 11.3 Working Conference on Data and Applications Security and Privacy, Fairfax, VA, USA , July 13-15, 2015.<br />This paper will also be a part of a book (Chapter 16) published in Springer 2015. ISBN: 978-3-319-20809-1, Book ID: 340025_1_En.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2015}">2015</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Annanda Thavymony RATH and Jean-No&euml;l Colin. &#96;&#96;Purpose Enforcement: Predicting purpose achievement using association rule learning method with the support of access history and contextual information\\&quot;. ESORICS 2015, 20th European Symposium on Research in Computer Security, 21-25, September 2015, Vienna, Austria.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Annanda Thavymony RATH and Jean-No&euml;l Colin. ``Purpose Enforcement: Predicting purpose achievement using association rule learning method with the support of access history and contextual information". ESORICS 2015, 20th European Symposium on Research in Computer Security, 21-25, September 2015, Vienna, Austria.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2015}">2015</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;SOK, K., Serge Miranda (2015). &ldquo;Future Mobiquitous Tourism in Cambodia&rdquo;, (pp. 257-259). In The 15th SCA Conference and International Symposium under the theme Science and Technology for Culture, 15th-16th May 2015 ,Siem Reap, Cambodia.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">SOK, K., Serge Miranda (2015). &ldquo;Future Mobiquitous Tourism in Cambodia&rdquo;, (pp. 257-259). In The 15th SCA Conference and International Symposium under the theme Science and Technology for Culture, 15th-16th May 2015 ,Siem Reap, Cambodia.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2015}">2015</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Tith Dara and Annanda Thavymony RATH. Prediction methods: Predicting access goal based on user&rsquo;s access history. The third international conference on inclusive innovation and innovative management, ICIIIM 2015, 25- 26 Nov 2015, Pathumthani, Thailand.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Tith Dara and Annanda Thavymony RATH. Prediction methods: Predicting access goal based on user&rsquo;s access history. The third international conference on inclusive innovation and innovative management, ICIIIM 2015, 25- 26 Nov 2015, Pathumthani, Thailand.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2015}">2015</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;S. Kheang, K. Katsurada, Y. Iribe, and T. Nitta, &ldquo;Model Prioritization Voting Schemes for Phoneme Transition Network-based Grapheme-to-Phoneme Conversion,&rdquo; in Proc. of the International Conference on Computer and Information Science and Technology (CIST\'15), (Ottawa, Canada), May 2015.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">S. Kheang, K. Katsurada, Y. Iribe, and T. Nitta, &ldquo;Model Prioritization Voting Schemes for Phoneme Transition Network-based Grapheme-to-Phoneme Conversion,&rdquo; in Proc. of the International Conference on Computer and Information Science and Technology (CIST\'15), (Ottawa, Canada), May 2015.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2015}">2015</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Chuor, P., Verleysen, M., &amp; Valy, D. (December 2015). Khmer Optical Character Recognition Using Zernike Moment. 2015 Khmer Natural Language Processing annual conference (KNLP 2015)&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Chuor, P., Verleysen, M., &amp; Valy, D. (December 2015). Khmer Optical Character Recognition Using Zernike Moment. 2015 Khmer Natural Language Processing annual conference (KNLP 2015)</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2016}">2016</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Journal&quot;}">Journal</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;S. Kheang, K. Katsurada, Y. Iribe, and T. Nitta, &ldquo;Using reversed sequences and grapheme generation rules to extend the feasibility of a phoneme transition network-based grapheme-to-phoneme conversion,&rdquo; IEICE Transactions on Information and Systems, Vol.E99-D, No. 4, April 2016.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">S. Kheang, K. Katsurada, Y. Iribe, and T. Nitta, &ldquo;Using reversed sequences and grapheme generation rules to extend the feasibility of a phoneme transition network-based grapheme-to-phoneme conversion,&rdquo; IEICE Transactions on Information and Systems, Vol.E99-D, No. 4, April 2016.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2016}">2016</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl66" style="border-top: none; border-left: none; border-right: transparent; overflow: visible; padding-bottom: 0px; padding-top: 0px; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Valy, D., Verleysen, M., &amp; Sok, K. (2016, October). Line Segmentation Approach for Ancient Palm Leaf Manuscripts using Competive Learning Algorithm. In Frontiers in Handwriting Recognition (ICFHR), 2016 15th International Conference on. IEEE.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Valy, D., Verleysen, M., &amp; Sok, K. (2016, October). Line Segmentation Approach for Ancient Palm Leaf Manuscripts using Competive Learning Algorithm. In Frontiers in Handwriting Recognition (ICFHR), 2016 15th International Conference on. IEEE.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2016}">2016</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Burie, J. C., Coustaty, M., Hadi, S., Kesiman, M. W. A., Ogier, J. M., Paulus, E., Sok, K., Sunraya, I. M. G. &amp; Valy, D. (2016, October). ICFHR2016 Competition on Analysis of Handwritten Text in Images of Balinese Palm Leaf Manuscripts. In Frontiers in Handwriting Recognition (ICFHR), 2016 15th International Conference on. IEEE.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Burie, J. C., Coustaty, M., Hadi, S., Kesiman, M. W. A., Ogier, J. M., Paulus, E., Sok, K., Sunraya, I. M. G. &amp; Valy, D. (2016, October). ICFHR2016 Competition on Analysis of Handwritten Text in Images of Balinese Palm Leaf Manuscripts. In Frontiers in Handwriting Recognition (ICFHR), 2016 15th International Conference on. IEEE.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2017}">2017</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Journal&quot;}">Journal</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Kesiman, M. W. A., Valy, D., Burie, J. C., Paulus, E., Sunarya, I. M. G., Hadi, S., Sok, K., &amp; Ogier, J. M. (2017). Southeast Asian palm leaf manuscript images: a review of handwritten text line segmentation methods and new challenges. Journal of Electronic Imaging, 26(1), 011011-011011.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Kesiman, M. W. A., Valy, D., Burie, J. C., Paulus, E., Sunarya, I. M. G., Hadi, S., Sok, K., &amp; Ogier, J. M. (2017). Southeast Asian palm leaf manuscript images: a review of handwritten text line segmentation methods and new challenges. Journal of Electronic Imaging, 26(1), 011011-011011.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2017}">2017</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Valy, D., Verleysen, M., &amp; Sok, K. (2017). Text Line Segmentation Approach for Grayscale Text Images of Khmer Palm Leaf Manuscripts. In 7th International Conference on Image Processing Theory, Tools, and Applications (IPTA). IEEE.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Valy, D., Verleysen, M., &amp; Sok, K. (2017). Text Line Segmentation Approach for Grayscale Text Images of Khmer Palm Leaf Manuscripts. In 7th International Conference on Image Processing Theory, Tools, and Applications (IPTA). IEEE.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2017}">2017</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl67" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;D. Valy, M. Verleysen, S. Chhun, and J.-C. Burie, &ldquo;A New Khmer Palm Leaf Manuscript Dataset for Document Analysis and Recognition: SleukRith Set,&rdquo; in Proceedings of the 4th International Workshop on Historical Document Imaging and Processing, 2017, pp. 1&ndash;6.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">D. Valy, M. Verleysen, S. Chhun, and J.-C. Burie, &ldquo;A New Khmer Palm Leaf Manuscript Dataset for Document Analysis and Recognition: SleukRith Set,&rdquo; in Proceedings of the 4th International Workshop on Historical Document Imaging and Processing, 2017, pp. 1&ndash;6.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2017}">2017</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl69" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Annanda Thavymony RATH and Jean-No&euml;l Colin. Strengthening Access Control in case of Compromised Account in Smart Home. The 2nd IEEE WiMob 2017 Workshop on Smart Environments &amp; Urban Networking, (SEUNet 2017) Collocated with the 13th IEEE WiMob 2017, Rome, Italy, 9th October 2017.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Annanda Thavymony RATH and Jean-No&euml;l Colin. Strengthening Access Control in case of Compromised Account in Smart Home. The 2nd IEEE WiMob 2017 Workshop on Smart Environments &amp; Urban Networking, (SEUNet 2017) Collocated with the 13th IEEE WiMob 2017, Rome, Italy, 9th October 2017.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2017}">2017</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl69" style="border-top: none; border-left: none; border-right: transparent; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Annanda Thavymony RATH and Jean-No&euml;l Colin. Adaptive Risk-aware Access Control Model for Internet of Things. International Workshop on Secure Internet of Things in conjunction with esorics2017. Oslo, 13-15 September 2017.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Annanda Thavymony RATH and Jean-No&euml;l Colin. Adaptive Risk-aware Access Control Model for Internet of Things. International Workshop on Secure Internet of Things in conjunction with esorics2017. Oslo, 13-15 September 2017.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2018}">2018</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Journal&quot;}">Journal</td>
<td class="xl66" style="border-top: none; border-left: none; border-right: transparent; overflow: visible; padding-bottom: 0px; padding-top: 0px; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;M. W. A. Kesiman, D. Valy, J.-C. Burie, E. Paulus, M. Suryani, S. Hadi, M. Verleysen, S. Chhun, and J.-M. Ogier, &ldquo;Benchmarking of Document Image Analysis Tasks for Palm Leaf Manuscripts from Southeast Asia,&rdquo; Journal of Imaging, vol. 4, no. 2, p. 43, 2018.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">M. W. A. Kesiman, D. Valy, J.-C. Burie, E. Paulus, M. Suryani, S. Hadi, M. Verleysen, S. Chhun, and J.-M. Ogier, &ldquo;Benchmarking of Document Image Analysis Tasks for Palm Leaf Manuscripts from Southeast Asia,&rdquo; Journal of Imaging, vol. 4, no. 2, p. 43, 2018.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2018}">2018</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl66" style="border-top: none; border-left: none; border-right: transparent; overflow: visible; padding-bottom: 0px; padding-top: 0px; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;S. Hen, D. Valy, S. Chhun, and R. Siv, &ldquo;An Initial Study on Synthetic Data for Khmer Ancient Document Analysis,&rdquo; in 11th AUN/SEED-Net Regional Conference on Computer and Information Engineering 2018 (AUN-RC CIE 2018), Surabaya, Indonesia, 2018.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">S. Hen, D. Valy, S. Chhun, and R. Siv, &ldquo;An Initial Study on Synthetic Data for Khmer Ancient Document Analysis,&rdquo; in 11th AUN/SEED-Net Regional Conference on Computer and Information Engineering 2018 (AUN-RC CIE 2018), Surabaya, Indonesia, 2018.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2018}">2018</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl66" style="border-top: none; border-left: none; border-right: transparent; overflow: visible; padding-bottom: 0px; padding-top: 0px; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Sok, K., Colin, J-N. &amp; PO, K., 6 d&eacute;c. 2018, \\&quot;Blockchain and Internet of Things Opportunities and Challenges\\&quot;, Proceedings of the 9th International Symposium on Information and Communication Technology, SoICT 2018. p. 150-154 5 p.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Sok, K., Colin, J-N. &amp; PO, K., 6 d&eacute;c. 2018, "Blockchain and Internet of Things Opportunities and Challenges", Proceedings of the 9th International Symposium on Information and Communication Technology, SoICT 2018. p. 150-154 5 p.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2018}">2018</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl66" style="border-top: none; border-left: none; border-right: transparent; overflow: visible; padding-bottom: 0px; padding-top: 0px; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Burie, J. C., Kesiman, M. W. A., Valy, D., Paulus, E., Suryani, M., Hadi, S., Verleysen, M., Chhun, S. &amp; Ogier, J. M. (2018). ICFHR 2018 Competition on Document Image Analysis Tasks for Southeast Asian Palm Leaf Manuscripts. In 16th International Conference on Frontiers in Handwriting Recognition (ICFHR). IEEE.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Burie, J. C., Kesiman, M. W. A., Valy, D., Paulus, E., Suryani, M., Hadi, S., Verleysen, M., Chhun, S. &amp; Ogier, J. M. (2018). ICFHR 2018 Competition on Document Image Analysis Tasks for Southeast Asian Palm Leaf Manuscripts. In 16th International Conference on Frontiers in Handwriting Recognition (ICFHR). IEEE.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2018}">2018</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl66" style="border-top: none; border-left: none; border-right: transparent; overflow: visible; padding-bottom: 0px; padding-top: 0px; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Valy, D., Verleysen, M., Chhun, S. &amp; Burie, J. C. (2018). Character and Text Recognition of Khmer Historical Palm Leaf Manuscripts. In 16th International Conference on Frontiers in Handwriting Recognition (ICFHR). IEEE.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Valy, D., Verleysen, M., Chhun, S. &amp; Burie, J. C. (2018). Character and Text Recognition of Khmer Historical Palm Leaf Manuscripts. In 16th International Conference on Frontiers in Handwriting Recognition (ICFHR). IEEE.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2018}">2018</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl66" style="border-top: none; border-left: none; border-right: transparent; overflow: visible; padding-bottom: 0px; padding-top: 0px; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Phutphalla Kong, Matei Mancas, Seng Kheang, and Bernard Gosselin. Saliency and object detection. In 2018 International Conference on Pattern Recognition and Artificial Intelligence (ICPRAI), pages 523&ndash;528. CENPARMI, 2018.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Phutphalla Kong, Matei Mancas, Seng Kheang, and Bernard Gosselin. Saliency and object detection. In 2018 International Conference on Pattern Recognition and Artificial Intelligence (ICPRAI), pages 523&ndash;528. CENPARMI, 2018.</div>
</div>
</td>
</tr>
<tr style="height: 15px;">
<td class="xl65" style="height: 15px; border-top: none; width: 48px; overflow: hidden; padding-bottom: 0px; padding-top: 0px;" height="20" data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2018}">2018</td>
<td class="xl65" style="border-top: none; border-left: none; width: 82px; overflow: hidden; padding-bottom: 0px; padding-top: 0px; height: 15px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Conference&quot;}">Conference</td>
<td class="xl66" style="border-top: none; border-left: none; border-right: transparent; overflow: visible; padding-bottom: 0px; padding-top: 0px; height: 15px; width: 773px;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Phutphalla Kong, Matei Mancas, Nimol Thuon, Seng Kheang, and Bernard Gosselin. Do deep-learning saliency models really model saliency? In 2018 25th IEEE International Conference on Image Processing (ICIP), pages 2331&ndash;2335. IEEE, 2018.&quot;}">
<div style="left: 3px; overflow: hidden; position: relative;">
<div style="float: left;">Phutphalla Kong, Matei Mancas, Nimol Thuon, Seng Kheang, and Bernard Gosselin. Do deep-learning saliency models really model saliency? In 2018 25th IEEE International Conference on Image Processing (ICIP), pages 2331&ndash;2335. IEEE, 2018.</div>
</div>
</td>
</tr>
</tbody>
</table>',
                'created_at' => '2019-06-15 11:41:00',
                'updated_at' => '2019-08-07 07:48:07',
            ),
            5 => 
            array (
                'id' => 6,
                'developer_name' => 'software_and_tools',
                'html_text' => '<p style="text-align: center;">The following video is the short presentation about Electronic Health Record Chain, the research topic of Mr. Tith Dara, a GIC\'s staff and PhD Candidate at Tokyo Institute of Technology.</p>
<p>&nbsp;</p>
<p style="text-align: center;"><iframe src="https://www.youtube.com/embed/DLt8PxY-dAo" width="1120" height="630" frameborder="0" allowfullscreen=""></iframe></p>',
                'created_at' => '2019-06-15 11:41:00',
                'updated_at' => '2019-09-05 08:55:46',
            ),
            6 => 
            array (
                'id' => 7,
                'developer_name' => 'lab_khmer_nlp',
                'html_text' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'created_at' => '2019-06-15 11:42:07',
                'updated_at' => '2019-06-15 11:42:07',
            ),
            7 => 
            array (
                'id' => 8,
                'developer_name' => 'lab_dads',
                'html_text' => '<p>What is it?</p>',
                'created_at' => '2019-06-15 11:42:00',
                'updated_at' => '2019-06-24 13:48:21',
            ),
            8 => 
            array (
                'id' => 9,
                'developer_name' => 'incubations',
                'html_text' => '<h1 style="padding-left: 80px;">About Incubation Center</h1>
<ul>
<li style="list-style-type: none;">
<ul>
<li style="list-style-type: none;">
<ul>
<li><span style="font-size: 12pt;">Is one of ITC&rsquo;s initiatives and was established in February 2018</span></li>
<li><span style="font-size: 12pt;">Serves as an incubator which offer the basic facilities and pre-incubation activities to support teams in the development of their business ideas, business models and business plans.&nbsp;&nbsp;</span></li>
<li><span style="font-size: 12pt;">Promote innovation and startup-creation in STEM.&nbsp;</span></li>
<li><span style="font-size: 14pt;"><span style="font-size: 12pt;">Provide support to those business ideas which either are elaborated by students or are spin-offs of R&amp;D activities by researchers.&nbsp;</span>&nbsp;</span></li>
</ul>
</li>
</ul>
</li>
</ul>
<h1 style="padding-left: 80px;">What we do</h1>
<ul>
<li style="list-style-type: none;">
<ul>
<li style="list-style-type: none;">
<ul>
<li><span style="font-size: 12pt;">Provide the basic infrastructural support i.e. Office space, meeting room, Internet access.</span></li>
<li><span style="font-size: 12pt;">Host and brings innovation and entrepreneurship activities i.e. training, workshops, seminars, competitions and conferences.</span></li>
<li><span style="font-size: 12pt;">Facilitate networking with resources which include mentors, experts, investors within and outside the country.&nbsp;</span></li>
</ul>
</li>
</ul>
</li>
</ul>
<h1 style="padding-left: 80px;">Past-Activities&nbsp;</h1>
<ul>
<li style="list-style-type: none;">
<ul>
<li style="list-style-type: none;">
<ul>
<li><span style="font-size: 12pt;">Techno Innovation Challenge Cambodia 2017 (Nov-Dec, 2017)</span></li>
<li><span style="font-size: 12pt;">Invent For The Planet (Feb 12-13, 2018)</span></li>
<li><span style="font-size: 12pt;">Training on Art of Debate (March 03, 2018)</span></li>
<li><span style="font-size: 12pt;">Debate Competition (March 07, 2018)</span></li>
<li><span style="font-size: 12pt;">Round table on the Protection of Creative Production (March 28, 2018)</span></li>
<li><span style="font-size: 12pt;">Conference on Patent Intelligence and Innovation (April 5th, 2018)</span></li>
</ul>
</li>
</ul>
</li>
</ul>
<p style="padding-left: 80px;">&nbsp;</p>
<figure class="image align-right"><img style="width: 900px; height: 507px;" title="Main building" src="/storage/site-contents/June2019/Picture1.jpg" alt="Main building" />
<figcaption>I building</figcaption>
</figure>
<p>&nbsp;</p>
<figure class="image align-right"><img style="width: 901px; height: 678px;" title="Working space" src="/storage/site-contents/June2019/Picture2.jpg" alt="Working space" />
<figcaption>Working Space</figcaption>
</figure>
<p>&nbsp;</p>
<figure class="image align-center"><img style="width: 898px; height: 678px;" title="Working Space" src="/storage/site-contents/June2019/Picture3.jpg" alt="Working Space" />
<figcaption>Working Space</figcaption>
</figure>
<p>&nbsp;</p>
<figure class="image align-center"><img style="width: 900px; height: 722px;" src="/storage/site-contents/June2019/photo6339280396872689719.jpg" alt="Working Space" />
<figcaption>Working Space</figcaption>
</figure>
<p>&nbsp;</p>
<figure class="image align-center"><img style="width: 901px; height: 601px;" title="Working Space" src="/storage/site-contents/June2019/photo6339280396872689720.jpg" alt="Working Space" />
<figcaption>Working Space</figcaption>
</figure>
<p>&nbsp;</p>
<figure class="image align-center"><img style="width: 901px; height: 601px;" title="Activity" src="/storage/site-contents/June2019/photo6339280396872689718.jpg" alt="Activity" />
<figcaption>Activity</figcaption>
</figure>
<p>&nbsp;</p>
<figure class="image align-center"><img style="width: 902px; height: 602px;" title="Activity" src="/storage/site-contents/June2019/photo63392803968726897171.jpg" alt="Activity" />
<figcaption>Activity</figcaption>
</figure>
<p>&nbsp;</p>
<figure class="image align-center"><img style="width: 902px; height: 606px;" title="Activity" src="/storage/site-contents/June2019/Picture42.jpg" alt="Activity" />
<figcaption>Activity</figcaption>
</figure>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>',
                'created_at' => '2019-06-15 11:42:00',
                'updated_at' => '2019-09-05 09:13:08',
            ),
        ));
        
        
    }
}