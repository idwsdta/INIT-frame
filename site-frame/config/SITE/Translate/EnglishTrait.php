<?php
namespace SITE\Translate;

use SITE\Translate\DoSoftLanguagePackAbstract;

/**
 *
 * @author Clement
 *
 */
trait  Englishtrait{
    private static $sEnglish = [
        'IT Services' => 'IT Services',
        'We provide specialized IT services tailored to each user' => 'We provide specialized IT services tailored to each user',
        'Specialized in standalone applications' => 'Specialized in standalone applications',
        'Computer Services' => 'Computer Services',
        'Software' => 'Software',
        'Hardware' => 'Hardware',
        'Embedded systems' => 'Embedded systems',
        'Training' => 'Training',
        // Software Activities supported
        'Develop with us your' => 'Develop with us your',
        'Website' => 'Website',
        'Mobile Application' => 'Mobile Application',
        'Database systems' => 'Database systems',

        'Enterprise' => 'Enterprise',
        'Staff your enterprise with' => 'Staff your enterprise with',
        'Automated billing systems'=>'Automated billing systems',
        'E-mail marketing systems' => 'E-mail marketing systems',
        'Content management' => 'Content management',
        'Customer Relationship Management (CRM)'=> 'Customer Relationship Management (CRM)',
        'Enterprise Resource Planning (ERP)'=> 'Enterprise Resource Planning (ERP)',
        'Business Continuity Planning (BCP)' => 'Business Continuity Planning (BCP)',
        'Financing' => 'Financing',
        'E-commerce' => 'E-commerce',
        'Sell online by' => 'Sell online by',
        'Listing your products' => 'Listing your products',
        'Payment processing' => 'Payment processing',
        'Consumers pay-per-download basis' => 'Consumers pay-per-download basis',
        'Customer profiling' => 'Customer profiling',
        'Product management' => 'Product management',
        'Newsletters' => 'Newsletters',
        'Customer management' => 'Customer management',
        'Blogs & Online Diaries' => 'Blogs & Online Diaries',
        'Post your news by' => 'Post your news by',
        'Daily journaling' => 'Daily journaling',
        'Automated journal' =>'Automated journal',
        'Forums' => 'Forums',
        'Build your online group to' => 'Build your online group to',
        'Share your opinion' => 'Share your opinion',
        'Online community' => 'Online community',
        'Informational' => 'Informational',
        'Share informations by' => 'Share informations by',
        'Bring your newspaper online' => 'Bring your newspaper online',
        'Tutorials' => 'Tutorials',
        'Daily video' => 'Daily video',
        'Social Networking' => 'Social Networking',
        'Be social by' => 'Be social by',
        'Publishing yourself to online social network' => 'Publishing yourself to online social network',
        'Building application in a online social network' => 'Building application in a online social network',
        'Personal'=>'Personal',
        'Share personal information with' => 'Share personal information with',
        'Portofolios' => 'Portofolios',
        'Profile' => 'Profile',
        'Create, manage and maintain your Website includes' => 'Create, manage and maintain your Website includes',
        'simply, low cost but highest quality' => 'simply, low cost but highest quality',
        'Responsive design (UI,UX)' => 'Responsive design (UI,UX)',
        'Development' => 'Development',
        'Web service & RSS' => 'Web service & RSS',
        'SEO integration' => 'SEO integration',
        'Api integration (Facebook app, paypal, Twitter)' => 'Api integration (Facebook app, paypal, Twitter)',
        'Online Marketing' =>  'Online Marketing',
        'CrossPlatform or Native application' => 'CrossPlatform or Native application',
        'Gaming' => 'Gaming',
        'Staff your game with' => 'Staff your game with',
        '2D game' => '2D game',
        '3D game' => '3D game',
        'Single user (2D,3D)' => 'Single user (2D,3D)',
        'Multi users (2D,3D)' => 'Multi users (2D,3D)',
        'Lottery game' => 'Lottery game',
        'Directory' => 'Directory',
        'By' => 'By',
        'E-book' => 'E-book',
        'Search engine' => 'Search engine',
        'Newspaper' => 'Newspaper',
        'Place geolocator' => 'Place geolocator',
        'Mobile e-commerce' => 'Mobile e-commerce',
        'Mobile agenda' => 'Mobile agenda',
        'Organise your' => 'Organise your',
        'Personal meeting' => 'Personal meeting',
        'Team meeting' => 'Team meeting',
        'Project management' => 'Project management',
        'Billing' => 'Billing',
        'Enterprise Application' => 'Enterprise Application',
        'Staff your enterprise mobile application with ' => 'Staff your enterprise mobile application with ',
        'Mobile profile' => 'Mobile profile',
        'Create, manage and maintain your mobile application includes' => 'Create, manage and maintain your mobile application includes',
        'SEM integration' => 'SEM integration',
        'Api integration (Facebook app, paypal, Twitter,...)' => 'Api integration (Facebook app, paypal, Twitter,...)',
        'Determining data to be stored'=>'Determining data to be stored',
        'Normalization (3rd)'=>'Normalization (3rd)',
        'Determining data type'=>'Determining data type',
        'Entity-Relationship diagram (ERD)'=>'Entity-Relationship diagram (ERD)',
        'Implementation'=>'Implementation',
        'With'=>'With',
        'Administration'=>'Administration',
        'Develop DBA'=>'Develop DBA',
        'Secure'=>'Develop DBA',
        'Maintain' => 'Maintain DBA',
        'Optimisation'=>'Optimisation',
        'Query processing'=>'Query processing',
        'Query optimisation'=>'Query optimisation',
        'Create, manage and maintain your database system includes'=>'Create, manage and maintain your database system includes',
        'Design (3nf)'=>'Design (3nf)',
        'Development(SQL, PL/SQL, NoSql)'=>'Development(SQL, PL/SQL, NoSql)',
        'Migrate'=>'Migrate',
        'Warehouse'=>'Warehouse',
        'Store and manage your product with'=>'Store and manage your product with',
        'Products registration system'=>'Products registration system',
        'Product accounting'=>'Product accounting',
        'Enterprise resource management'=>'Enterprise resource management',
        'Enterprise resource planning (ERP)'=>'Enterprise resource planning (ERP)',
        'Create, manage and maintain your desktop application includes'=>'Create, manage and maintain your desktop application includes',
        'Design (UI, UX)'=>'Design (UI, UX)',
        'Software Maintenance'=>'Software Maintenance',
        'Updating'=>'Updating',
        'Upgrading' => 'Upgrading',
        'Stay safe by'=>'Stay safe by',
        'Backing up your entire website'=>'Backing up your entire website',
        'Monitor Outages' => 'Monitor Outages',
        'Test speed'=>'Test speed',
        'Link Check'=>'Link Check',
        'Traffic state'=>'Traffic state',
        'New Features and Upgrades'=>'New Features and Upgrades',
        'Application Porting'=>'Application Porting',
        'Support for New Devices'=>'Support for New Devices',
        'Enterprise App Store Management, Analytics and Reporting'=>'Enterprise App Store Management, Analytics and Reporting',
        'Back up'=>'Back up',
        'Integrity Check'=>'Integrity Check',
        'Index Optimise'=>'Index Optimise',
        'Statistics'=>'Statistics',
        'Application Migration'=>'Application Migration',
        'Improve customer satisfaction'=>'Improve customer satisfaction',
        'Application re-engineering'=>'Application re-engineering',
        'manage and maintain your software includes'=>'manage and maintain your software includes',
        'Change'=>'Change',
        'Extend' =>'Extend',
        'simply, low cost but highest quality delivery'=>'simply, low cost but highest quality delivery',
        'Interested in'=>'Interested in',
        'Budget'=>'Budget',
        'Thanks for your order!'=>'Thanks for your order!',
        "We'll contact you very soon." =>"We'll contact you very soon.",
        'Software project'=>'Software project',
        'project-software'=>'<p> At <a href="javascript:void()" dosoft="ds">DoSoft</a> project first we handle your project closely as you want.By adding your project, we work for you to you to finalize every requirement based on your defined requirement and budget.
                                       </p><p>Also, when the project get ready to start you will be required to ensure us with the 20% of the project budget that will be hosted to the project resource
                                        until the first test delivery.</p><p>
                                        On delivery denied, and no changed request, the project and all resource includes the hosted come back automatically.
                                       </p><p>For more information, please <a href="#contact" dosoft="contact"> <br/> Contact us</a>
                                        or read more at the <a id="ds-faq-project" data-doc="faq" class="faq ds-faq-project" href="javascrip:void()" dosoft="faq">FAQ.</a>
                                        <br/><strong style="padding: 3px" class="italic pull-right"><a href="javascript:void()"dosoft="ds">DoSoft</a>
                                           <span dosoft="team"> project gathering Team.</span></strong>
                                    </p>',
        'Name'=>'Name',
        'Company'=>'Company',
        'E-mail'=>'E-mail',
        'Phone'=>'Phone',
        'Expected start date'=>'Expected start date',
        'Expected finish date'=>'Expected finish date',
        'Remove'=>'Remove',
        'Tell us about your project'=>'Tell us about your project',
        'Send request'=>'Send request',
        'File'=>'File',
        'Less than'=>'Less than',
        'More than'=>'More than',
        //'Database systems(Oracle, MySql,MongoDB)',
        'Desktop Application' => 'Desktop Application',
        'Software language' => 'Software using Php,Java, C/C++, SqL,NoSQL,Css,Html,JavaScript',
        'Mobile Systems' => 'jQueryMobile, PhoneGap,Android',
        'Maintenance' => 'Maintenance',
        'Open sources' => 'Software integration with  Magento, Zend Framework, Wordpress, Facebook api Google api, Twitter Api...',
        'Submit your project' => 'Submit your project',
        //Hardware activities
        'Develop and Maintain your hardware with us' => 'Develop with us your',
        'Design' => 'Design',
        'Programming' => 'Programming',
        'Assembly and disassembly' => 'Assembly and disassembly',
        'Configuration' => 'Configuration',

        'Hardware design'=>'Hardware design',
        'Architecture'=>'Architecture',
        'Define Overall Chip'=>'Define Overall Chip',
        'Control Model'=>'Control Model',
        'Initial Floorplan'=>'Initial Floorplan',
        'Logic'=>'Logic',
        'Behavioral Simulation'=>'Behavioral Simulation',
        'Logic Simulation'=>'Logic Simulation',
        'Synthesis'=>'Synthesis',
        'Datapath Schematics'=>'Datapath Schematics',
        'Circuit'=>'Circuit',
        'Cell Libraries'=>'Cell Libraries',
        'Circuit Schematics'=>'Circuit Schematics',
        'Circuit Simulation'=>'Circuit Simulation',
        'Megacell Blocks'=>'Megacell Blocks',
        'Physical'=>'Physical',
        'Layout and Floorplan'=>'Layout and Floorplan',
        'Place and Route'=>'Place and Route',
        'Parasitics Extration'=>'Parasitics Extration',
        'DRC/LVS/ERC'=>'DRC/LVS/ERC',
        'Design and simulate your hardware circuit and chip with tools such as'=>'Design and simulate your hardware circuit and chip with tools such as',
        'Hardware circuit maker'=>'Hardware circuit maker',
        'VHDL'=>'VHDL',
        'Verilog'=>'Verilog',
        'Hardware Programming'=>'Hardware Programming',
        'Testing'=>'Testing',
        'Declarative'=>'Declarative',
        'Constraint'=>'Constraint',
        'Dataflow'=>'Dataflow',
        'Functional'=>'Functional',
        'Metaprogramming'=>'Metaprogramming',
        'Automatic'=>'Automatic',
        'Reflective'=>'Reflective',
        'Homoiconic'=>'Homoiconic',
        'Template'=>'Template',
        'Language-oriented'=>'Language-oriented',
        'Natural language programming'=>'Natural language programming',
        'Discipline-specific'=>'Discipline-specific',
        'Domain-specific'=>'Domain-specific',
        'Grammar-oriented'=>'Grammar-oriented',
        'Intentional'=>'Intentional',
        'Code your chip with hardware powerful language'=>'Code your chip with hardware powerful language',
        'Assembly'=>'Assembly',
        'Hardware Components'=>'Hardware Components',
        'Disassembly'=>'Disassembly',
        'assemble hardware system such as'=>'assemble hardware system such as',
        'Pc Computer (Laptop - Desktop - Mainframe)'=>'Pc Computer (Laptop - Desktop - Mainframe)',
        'Cell phone'=>'Cell phone',
        'All programmable devices'=>'All programmable devices',
        'disassemble hardware system such as'=>'disassemble hardware system such as',
        'Assembly and disassembly any computer based  devices such as'=>'Assembly and disassembly any computer based  devices such as',
        'Laptop'=>'Laptop',
        'Cell telephone'=>'Cell telephone',
        'Desktop computer'=>'Desktop computer',
        'Cisco switches and routers'=>'Cisco switches and routers',
        'Server'=>'Server',
        'for update, upgrade and troubleshoot.'=>'for update, upgrade and troubleshoot.',
        'Made easy, with low cost but highest quality'=>'Made easy, with low cost but highest quality',
        'Hardware Management'=>'Hardware Management',
        'Management'=>'Management',
        'configure hardware system such as'=>'configure hardware system such as',
        'bring any computer based  devices such as'=>'bring any computer based  devices such as',
        'close to your needs'=>'close to your needs',
        'Hardware Maintenance'=>'Hardware Maintenance',
        'maintain hardware system such as'=>'maintain hardware system such as',
        'care of any computer based  devices such as'=>'care of any computer based  devices such as',
        'by resolving any working away'=>'by resolving any working away',
        'Hardware project'=>'Hardware project',
        'project-hardware'=>'<p>At <a href="javascript:void()">DoSoft</a> project first we handle your project closely as you want.By adding your project, we work for you to you to finalize every
                                        requirement based on your defined requirement and budget.
                                    </p>
                                    <p>Also, when the project get ready to start you will be required to ensure us with the 20% of the project budget that will be hosted to the project ressource
                                        until the first test delivery.
                                    </p>
                                    <p>On delivery denied, and no changed request, the project and all ressources
                                        includes the hosted come back automatically.
                                    </p>
                                    <p>For more information, please <a href="#contact"> <br/> Contact us</a> or read more at the <a id="ds-faq-project" data-doc="faq" class="faq ds-faq-project" href="javascrip:void()">FAQ.</a>
                                        <br/><strong style="padding: 3px" class="italic pull-right"><a href="javascript:void()">DoSoft</a> project gathering Team.</strong>
                                    </p>',

        //Hardware software activities
        'Embedded  with us your' => 'Embedded  with us your',
        'Computer Network' => 'Computer Network',
        'Robotics & Microcontrollers' => 'Robotics & Microcontrollers',
        'Server Management' => 'Server Managment',
        'Industrial automation with PLC' => 'Industrial automation with PLC',

        'design computer network such as '=>'design computer network such as ',
        'Local area network (LAN)'=>'Local area network (LAN)',
        'Metropolitan area network (MAN)'=>'Metropolitan area network (MAN)',
        'Wide area network (WAN)'=>'Wide area network (WAN)',
        'Wireless network (WN)'=>'Wireless network (WN)',
        'code'=>'code',
        'Switching'=>'Switching',
        'Routing'=>'Routing',
        'Virtual network (VLAN, VMAN, VWAN)'=>'Virtual network (VLAN, VMAN, VWAN)',
        'Implementation computer network such as'=>'Implementation computer network such as',
        'Network performance'=>'Network performance',
        'perform computer network such as'=>'perform computer network such as',
        'Security'=>'Security',
        'secure computer network such as'=>'secure computer network such as',
        'Design, code, maintain and  extend any computer network such as'=>'Design, code, maintain and  extend any computer network such as',
        'distribution and subnetting'=>'distribution and subnetting',
        'Frame relay network(RIP,..)'=>'Frame relay network(RIP,..)',
        'Secure, optimise and Performance'=>'Secure, optimise and Performance',
        'Integration'=>'Integration',
        'design robotic system'=>'design robotic system',
        'code robotic system with'=>'code robotic system with',
        'Assembly language'=>'Assembly language',
        'C language'=>'C language',
        'VDCL simulation language'=>'VDCL simulation language',
        'Design, create and extend servo (microcontroller) based robot systems'=>'Design, create and extend servo (microcontroller) based robot systems',
        'Single'=>'Single',
        'Distributed'=>'Distributed',
        'Installation'=>'Installation',
        'Troubleshooting'=>'Troubleshooting',
        'File Share'=>'File Share',
        'Mail filtering'=>'Mail filtering',
        'Short Message Service (SMS) Gateway'=>'Short Message Service (SMS) Gateway',
        'Install, configure and  extend any file hosting  based on  operating system such as'=>'Install, configure and  extend any file hosting  based on  operating system such as',
        'Windows server'=>'Windows server',
        'Web Server'=>'Web Server',
        'Installation(SMTP,POP/IMAP, Mail filtering)'=>'Installation(SMTP,POP/IMAP, Mail filtering)',
        'File sharing'=>'File sharing',
        'best practices'=>'best practices',
        'Design & Integration'=>'Design & Integration',
        'Ladder Diagrams (LD)'=>'Ladder Diagrams (LD)',
        'Function Block Diagram (FBD)'=>'Function Block Diagram (FBD)',
        'Instruction List (IL)'=>'Instruction List (IL)',
        'Structured Text (ST)'=>'Structured Text (ST)',
        'Communication network protection'=>'Communication network protection',
        'tag programmable logic control with SCADA base for design programming any automated production system'=>'tag programmable logic control with SCADA base for design programming any automated production system',
        'Easily, with low cost but highest quality'=>'Easily, with low cost but highest quality',
        'PLC Maintenance'=>'PLC Maintenance',
        'maintain embedded systems such as'=>'maintain embedded systems such as',
        'Microcontrollers based systems'=>'Microcontrollers based systems',
        'Servers'=>'Servers',
        'Plcs'=>'Plcs',
        'care of any programmable devices by resolving any working away'=>'care of any programmable devices by resolving any working away',
        'Embedded systems project'=>'Embedded systems project',
        'Embedded_systems_project'=>'<p>
                                        At <a href="javascript:void()">DoSoft</a> project first we handle your project closely as you want.
                                        By adding your project, we work for you to you to finalize every
                                        requirement based on your defined requirement and budget.
                                    </p>
                                    <p>
                                        Also, when the project get ready to start you will be required to ensure
                                        us with the 20% of the project budget that will be hosted to the project resource
                                        until the first test delivery.
                                    </p>
                                    <p>
                                        On delivery denied, and no changed request, the project and all resources
                                        includes the hosted come back automatically.
                                    </p><p>
                                        For more information, please <a href="#contact"> <br/> Contact us</a>
                                        or read more at the <a id="ds-faq-project" data-doc="faq" class="faq ds-faq-project" href="javascrip:void()">
                                            FAQ.</a>
                                        <br/><strong style="padding: 3px" class="italic pull-right"><a href="javascript:void()">DoSoft</a> project gathering Team.</strong>
                                    </p>',

        //Training
        'Teach yourself' => 'Teach yourself',
        'FrondEnd' => "HTML, CSS, JAVASCRIPT",
        'BACKEND' => "C/C++, JAVA. PHP, SQL, NoSQL",
        'Software Design' => 'Software Design',
        'WEBDESIGH' => 'Responsive Design',
        'Performance' => 'Performance',
        'Sign up' => 'Sign up',
        'About us' => 'about us',
        'Contact us' => 'Contact us',

        'Presentation and Events'=>'Presentation and Events',
        'Basic'=>'Basic',
        'Professional'=>'Professional',
        'Modern'=>'Modern',
        'you learn and add to your knowledge base the web page presentation in practice with'=>'you learn and add to your knowledge base the web page presentation in practice with',
        'At'=>'At',
        'high performance'=>'high high performance',
        'Secure coding'=>'Secure coding',
        'in mind. From notice to professional'=>'in mind. From notice to professional',
        'Web and Desktop application'=>'Web and Desktop application',
        'you learn and add to your kwnoledge base the data manipulation languages and saving in practice with'=>'you learn and add to your kwnoledge base the data manipulation languages and saving in practice with',
        'Software technology'=>'Software technology',
        'Design lifecycle'=>'Design lifecycle',
        'Requirement gathering'=>'Requirement gathering',
        'Specification export'=>'Specification export',
        'Analysis phase'=>'Analysis phase',
        'Coding'=>'Coding',
        'Maintenance lifecycle'=>'Maintenance lifecycle',
        'Handle change request'=>'Handle change request',
        'Extend the application'=>'Extend the application',
        'User training'=>'User training',
        'Howto'=>'Howto',
        'use the application'=>'use the application',
        'Application Documentation'=>'Application Documentation',
        'Application implementation'=>'Application implementation',
        'you learn and add to your knowledge base the theory of software technologies used in practice with'=>'you learn and add to your knowledge base the theory of software technologies used in practice with',
        'Methodology'=>'Methodology',
        'Design pattern'=>'Design pattern',
        'QA (Quality assurance)'=>'QA (Quality assurance)',
        'Basic project management'=>'Basic project management',
        'Responsive Design'=>'Responsive Desig',
        'View'=>'View',
        'Content'=>'Content',
        'Css based'=>'Css based',
        'Javascript based'=>'Javascript based',
        'Mixed Css and Javascript'=>'Mixed Css and Javascript',
        'Content fit'=>'Content fit',
        'Content reduce'=>'Content reduce',
        'Content map'=>'Content map',
        'Bandwidth'=>'Bandwidth',
        'Connectivity'=>'Connectivity',
        'you learn and add to your knowledge base the interface component fit in practice with'=>'you learn and add to your knowledge base the interface component fit in practice with',
        'Specific device'=>'Specific device',
        'General device'=>'General device',
        'Data mapping (RESTFUL data)'=>'Data mapping (RESTFUL data)',
        'Design optimisation'=>'Design optimisation',
        'Code management & Best practices'=>'Code management & Best practices',
        'Application optimisation'=>'Application optimisation',
        'you learn and add to your knowledge base the code and data performance  in practice with'=>'you learn and add to your knowledge base the code and data performance  in practice with',
        'Code optimisation'=>'Code optimisation',
        'Api consumption'=>'Api consume',
        'Data reduce and mapping'=>'Data reduce and mapping',
        'Code and data structure'=>'Code and data structure',
        'First name'=>'First name',
        'Last name'=>'Last name',
        'Message'=>'Message',
        'Learn Offline'=>'Learn Offline',
        'Learn online'=>'Learn online',
        'Learn first'=>'Learn first',
        'ds-learn'=>'<p>Learn and add to your knowledge base, practical and
		              theory of informatics technology 7/7.<br />
                       From software to hardware, from web to mobile.
                       </p><p>All of our courses are weekend and weekdays afternoon based.<br />
                         At the end of a course you will be required to pay us your defined
                         course budget.
                         </p><p>For more information, please <a href="#contact"> <br/> Contact us</a>
                          or read more at the <a id="ds-faq-project" data-doc="faq" class="faq ds-faq-project" href="javascrip:void()">
                           FAQ.</a><br/><strong style="padding: 3px" class="italic pull-right">
                         <a href="javascript:void()">DoSoft</a> teaching team.
                         </strong></p>',
        'Please' => 'Please',
        'start date' => 'start date',
        'end date' => 'end date',
        'valid file' => 'valid file',
        'Description' => 'Description',
        'Online' => 'Online',
        'Offline' => 'Offline',
        'Page Not Found (404)'=>'Page Not Found (404)',
        'The page'=>'The page',
        "do not exist." => "do not exist.",
        'Please, visit the'=>'Please, visit the',
        'DoSoft informatics services'=>'DoSoft informatics services',
        "if you're looking for service"=>"if you're looking for service",
        ',or'=>',or',
        "e-mail us"=>"e-mail us",
        'if you need further assistance.'=>'if you need further assistance.',
        'Thank you!'=>'Thank you!',
        '500 Internal Server Error'=>'500 Internal Server Error',
        "The server encountered an internal error or misconfiguration and was unable to complete your request"=>"The server encountered an internal error or misconfiguration and was unable to complete your request",
        "Please contact the server administrator and inform them of the time the error occurred, and the actions you performed just before this error"=>"Please contact the server administrator and inform them of the time the error occurred, and the actions you performed just before this error",
        "More information about this error may be available in the server error log."=>"More information about this error may be available in the server error log.",
        'Apache Server at dosoft.info Port 80'=>'Apache Server at dosoft.info Port 80',
        'Please: your e-mail is not valid!'=>'Please: your e-mail is not valid!',
        'Please: use other than ours!'=>'Please: use other than ours!',
        'Thank you! We will contact back sooner!'=>'Thank you! We will contact back sooner!',
        'Thanks for your message'=>'Thanks for your message',
        "We'll contact you very soon !!!"=>"We'll contact you very soon !!!",
        'Please enter the project identifier sent to your E-mail address'=>'Please enter the project identifier sent to your E-mail address',
        'Project identifier'=>'Project identifier',
        "Project identifier <strong>NOT</strong> valid"=>"Project identifier <strong>NOT</strong> valid",
        'Cancel'=>'Cancel',
        'Submit'=>'Submit',
        "POLICY_TITLE"=>"Privacy Policy",
        "POLICY_P1" =>"This statement outlines the information collection, usage and dissemination practices that apply to DoSoft informatics services.",
        "POLICY_P2" =>"The DoSoft may use cookies to enhance the information only across the application. If you do not wish to receive cookies you can modify your web browser settings to deny them. Please note that if you choose to decline cookies this may limit access to some areas of the application and have a negative effect on the performance.",
        "POLICY_P3" =>"<b>Non-personal information are collected by DoSoft informatics services.</b>",
        "POLICY_P4" =>"DoSoft informatics services collects certain non-personal information. This includes data relating to duration the user visit, how often they are accessed and other information relating to activity. This information is used to analyze the use of the application, to improve and enhance the quality of our services. This information is always in the form of aggregate, non-personal information. This information may be shared with partners of DoSoft informatics services to provide best services to you.",
        "POLICY_P5" =>"IP address of each user is also gathered by DoSoft.info web server. These are collected as non-personal, aggregate data. It is collected to help us diagnose issues with our services. DoSoft informatics services may use third parties to analyze the non-personal, aggregate information collected by us. This may also be made available to media organizations and research companies for comparison purposes.",
        "POLICY_P6" =>"Personal information collected by DoSoft IT services for research and content browsing our application can be accessed upon registration service. If you choose to add your DoSoft.info service, we will collect personal information about your name and contact information. This information can be accessed by you by contacting us.",
        "POLICY_P7" =>"This information is used only to facilitate our future collaboration. You can alter request to delete the information your account. Any deleted information may be retained on DoSoft informatics services systems for a period of time after this. DoSoft informatics services reserves a discretion to disable or delete accounts at any time.",
        "POLICY_PERSONAL_INFO_TITLE" =>"Publishing personal information",
        "POLICY_PERSONAL_INFO_P" =>"DoSoft informatics services has publicly accessible areas of the application, for example blogs. We strongly suggest that you do not publish personal information in such areas. DoSoft informatics services takes no responsibility for any collection or use by third parties of information disclosed in this way.",
        "POLICY_PERSONAL_SECURITY_TITLE" =>"Security and confidentiality",
        "POLICY_PERSONAL_SECURITY_P" =>"DoSoft informatics services takes all reasonable steps to ensure the protection of your information and the security of our system. Our team members are also obliged to respect the confidentiality of your personal information.",
        "POLICY_PERSONAL_SECURITY_P_1" =>"However, we cannot guarantee the security of this information and are not responsible for any unauthorized access to your personal information." ,
        "POLICY_PERSONAL_SECURITY_P_2" =>"It is also important that you keep your contact details confidential, including your service identifier. If you suspect any unauthorized access to or use of your service identifier, or any other breach of security please notify us immediately." ,
        "POLICY_PERSONAL_OVERSEAS_TITLE" =>"Overseas access to information" ,
        "POLICY_PERSONAL_OVERSEAS_P" =>"DoSoft informatics services may from time to time review your service information. You agree to this occurring when you provide us with your service information." ,
        "POLICY_PERSONAL_ACCESS_TITLE" =>"How to access your information" ,
        "POLICY_PERSONAL_ACCESS_P" =>"If you are a registered user, you can access your information via your e-mail. This information can be altered and deleted." ,
        "POLICY_CHANGE_TITLE" =>"Changes" ,
        "POLICY_CHANGE_P" =>"DoSoft informatics services may from time to time decide to change this policy. Any updated versions will be available on the application." ,
        "POLICY_CONTACT_US_TITLE" =>"Contact us" ,
        "POLICY_CONTACT_US_P" =>"If you have any queries relating to this policy or the use of your information please contact us." ,
        "FAQ_HOW_IT_WORKS_TITLE" =>"How does it work ?" ,
        "FAQ_HOW_IT_WORKS_P" =>"DoSoft informatics services has specify her service to help you find easily the category of your service. To add your service, if founded, you have to fill in the form the information of your service. All of your information will be sent to you  in your e-mail address and kept in the DoSoft informatics services system. Every service added has a unique identifier that is sent from the first contact. DoSoft informatics services will then contact you back for verification.",
        "FAQ_WHAT_SERVICE_TITLE" =>"Service type",
        "FAQ_WHAT_SERVICE_P" =>"DoSoft informatics services handle software and hardware project from design, development, integration, implementation and documentation. Also, provides informatics training from notice to professional." ,
        "FAQ_SERVICE_ADD_TITLE" =>"How do I add my service ?" ,
        "FAQ_SERVICE_ADD_P" =>"Simply click to your service category and fill in the form your service information." ,
        "FAQ_SERVICE_PAY_TITLE" =>"How to pay for my service ?" ,
        "FAQ_SERVICE_PAY_P" =>"DoSoft informatics services accepts all payment types, includes, PayPal and bank deposit." ,
        "FAQ_SERVICE_CHANGE_DETAIL_TITLE" =>"What If I need to change the details of my service that I've already in process?" ,
        "FAQ_SERVICE_CHANGE_DETAIL_P" =>"No problem. Any change can be provided on a service in process. By the type of a change, keep in mind that, DoSoft informatics services will review with you, your service end date and the cost." ,
        "FAQ_SERVICE_NO_MORE_INFO_TITLE" =>"What if I don't give more information ?" ,
        "FAQ_SERVICE_NO_MORE_INFO_P" =>"No problems. More detail after a contact with DoSoft informatics services Team." ,
        "FAQ_SERVICE_MORE_INFO_TITLE" =>"What if the developer or trainer request more detail about my service ?" ,
        "FAQ_SERVICE_MORE_INFO_P" =>"No problems, DoSoft informatics services Team has the ability to ask you questions about your service." ,
        "FAQ_SERVICE_ENSURED_TITLE" =>"Is my service ensured ?" ,
        "FAQ_SERVICE_ENSURED_P" =>"Yes, DoSoft informatics services works closely with you." ,
        "FAQ_SERVICE_CONTACT_DEV_TRNER_TITLE" =>"Can I contact the developer or trainer by phone or e-mail ?" ,
        "FAQ_SERVICE_CONTACT_DEV_TRNER_P" =>"Yes, DoSoft informatics services works closely with you." ,
        "FAQ_SERVICE_IN_PROCESS_MORE_INFO_TITLE" =>"What if i have more than one service in process ?" ,
        "FAQ_SERVICE_IN_PROCESS_MORE_INFO_P" =>"When a service is ready to start, DoSoft informatics services follow your service start and end date. Until that a status page will be available to keep you up to date." ,
        "FAQ_SERVICE_DEV_TRUSTABLE_TITLE" =>"How do I know if the developer or trainer is trustworthy or not ?" ,
        "FAQ_SERVICE_DEV_TRUSTABLE_P" =>"All our people are trustable, member of a team in specific discipline." ,
        "FAQ_SERVICE_DEV_CHOOSE_TITLE" =>"Do I have to choose a developer or trainer ?" ,
        "FAQ_SERVICE_DEV_CHOOSE_P" =>"No you do not. There is absolutely no." ,
        "FAQ_SERVICE_GET_READY_TITLE" =>"How long does it take to get ready my service ?",
        "FAQ_SERVICE_GET_READY_P" =>"DoSoft informatics services respect your initial service start and end date. Any change on  a service in process can cause by yourself, the increment of your service end date",

    ];

    /**
     * getEnglish()
     *
     * @return array
     */
    public static function getEnglish(){
        return self::$sEnglish;
    }
}