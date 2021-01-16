<?php 
if(isset($_GET['user'])){
        $user = $_GET['user'];
        
    if ($user == 'santosh') {
       $ogImage = 'santosh.jpg';
        $title = 'नमस्कार  मी संतोष केंद्रे ,आपल्या करिता  घेऊन  आलो एक नवीन शैक्षणिक माहिती ';
        $desc = 'आय टी विषयसहायक,डायट नांदेड लघुचित्रपट निर्माता दिगदर्शक';
    }
    elseif ($user == 'jatin') {
        $ogImage = 'jatin.jpg';
        $title = 'नमस्कार, मी जतिन कदम,सफाळे,ता.जि.पालघर';
       $desc = 'महाराष्ट्र राज्य आदर्श शिक्षक पुरस्कार/पत्रकार दै सकाळ,दै वृत्तमानस साप्ताहिक पालघर दर्पण Kadams breaking news '; 
    }
    elseif ($user == 'sameer') {
        $ogImage = 'sameer.jpg';
        $title = 'मी समीर सय्यद, तंत्रस्नेही शिक्षक, श्रीवर्धन जिल्हा रायगड आपल्यासाठी घेऊन आलो आहे.....';
        $desc = 'तंत्रस्नेही शिक्षक,ता.श्रीवर्धन जि रायगड'; 
    }
    elseif ($user == 'leena') {
        $ogImage = 'leena.jpg';
       $title = 'श्रीमती लीना मारुती पोटे , जिल्हा परिषद प्राथमिक शाळा नुने गावठाण ता. जि. सातारा';
         $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'pratibha') {
        $ogImage = 'pratibha.jpg';
       $title = 'प्रतिभा क्षीरसागर-कदम';
        $desc = 'महाराष्ट्र राज्य आदर्श शिक्षक पुरस्कार प्राप्त तथा सूत्रसंचालिका,महाराष्ट्राचे सूत्र संचालक समूह'; 
    }
    elseif ($user == 'nilesh') {
        $ogImage = 'nilesh.jpg';
       $title = 'निलेश गोविंदलवार';
        $desc = 'तंत्रस्नेही शिक्षक'; 
    }
     elseif ($user == 'sayeed') {
        $ogImage = 'sayeed.jpg';
       $title = 'मी सय्यद मोहम्मद हुसेन सफदार हुसेन तंत्रस्नेही शिक्षक, मालाड (पूर्व) मुंबई आपल्यासाठी घेऊन आलो आहे.....';
        $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'supriya') {
        $ogImage = 'supriya.jpg';
       $title = 'सुप्रिया वसंत मराळ, शिक्षिका,दिघी मराठी शाळा ता.श्रीवध॔न जि रायगड';
        $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'rauit') {
        $ogImage = 'rauit.jpg';
       $title = 'संतोष मारुतीराव राऊत सह शिक्षक जि. प. प्रा. शा. कारवाडी';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'kendre') {
        $ogImage = 'kendre.jpg';
       $title = 'केंद्रे व्यंकटी संतराम तंत्रस्नेही शिक्षक,';
       $desc = 'जि.प.हायस्कुल मुलींचे,मुखेड जि.,नांदेड 9403162293'; 
    }
     elseif ($user == 'bhadre') {
        $ogImage = 'bhadre.jpg';
       $title = 'Bhadre Raju Gautam';
       $desc = 'ZPCPS Narsi Tq. Naigaon'; 
    }
     elseif ($user == 'kakade') {
        $ogImage = 'kakade.jpg';
       $title = 'Kakade Kailas Asaru Headmaster';
       $desc = 'Nutan Madhyamik Vidyalaya Lonimasadpur Tal - Karjat Dist- Ahmadnagar'; 
    }
     elseif ($user == 'mayur') {
        $ogImage = 'mayur.jpg';
       $title = 'मयूर मधुकरराव जोशी जि प प्रा शा दौडगाव तालुका औंढा नागनाथ जिल्हा हिंगोली';
       $desc = 'आपल्यासाठी सादर करीत आहे'; 
    }
     elseif ($user == 'nagorao') {
        $ogImage = 'narorao.jpg';
       $title = 'नागोराव वामनराव जाधव प्राथमिक पदवीधर तंत्रस्नेही शिक्षक,';
       $desc = 'जि . प . हा . पेनूर ता . लोहा जि नांदेड.'; 
    }
     elseif ($user == 'varsha') {
        $ogImage = 'varsha.jpg';
       $title = 'वर्षा भोळे तंत्रस्नेही शिक्षिका नांदेड';
       $desc = ''; 
    }
    elseif ($user == 'sunita') {
        $ogImage = 'sunita.jpg';
       $title = 'सौ.सुनिता उत्तमराव वावधाने एम.ए.बी.एड सहशिक्षिका';
       $desc = 'जि प शाळा शहाजीनगर नांदेड'; 
    }
    elseif ($user == 'archana') {
        $ogImage = 'archana.jpg';
       $title = 'अर्चना लक्ष्मण बोधणे ,  जिल्हा परिषद प्राथमिक शाळा सावरगाव (माळ) ता. हदगाव.जि.नांदेड';
         $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
     elseif ($user == 'usha') {
        $ogImage = 'usha.jpg';
       $title = 'उषा नळगिरे सहशिक्षिका जि. प. प्रा शाळा पार्डी  ता. अर्धापूर जि. नांदेड';
         $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'manthan') {
        $ogImage = 'manthan.jpg';
       $title = 'Marewad Manthan Rajiv';
        $desc = ''; 
    }
    elseif ($user == 'nasa') {
        $ogImage = 'nasa.jpg';
       $title = 'ना. सा. येवतीकर स्तंभलेखक तथा तंत्रस्नेही शिक्षक जि. प. प्रा. कन्या शाळा धर्माबाद';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'sai') {
        $ogImage = 'sai.jpg';
       $title = 'साई येन्नावार';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'balaji') {
        $ogImage = 'balaji.jpg';
       $title = 'श्री बालाजी शिवराज तोरणेकर जि.प प्रा शाळा सावरगाव माळ ता हदगाव जि.नांदेड  सहशिक्ष पद स्काऊट गाईड जिल्हा साहस खेळ प्रमुख नांदेड  तथा स्वामी विवेकानंद फाऊंडेशन नांदेड संथापक अध्यक्ष';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'suman') {
        $ogImage = 'suman.jpg';
       $title = 'सौ सुमन म. कुलकर्णी  जि प हा अर्धापूर ';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'sarika') {
        $ogImage = 'sarika.jpg';
       $title = 'सौ. सारिका गणपतराव आचमे सहशिक्षिका, जिल्हा परिषद प्राथमिक शाळा कासारखेडा, केंद्र- तरोडा बु, तालुका व जिल्हा- नांदेड';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'kaushalya') {
        $ogImage = 'kaushalya.jpg';
       $title = 'कौशल्या कर्वेडकर जिल्हा परिषद केंद्रीय प्राथमिक शाळा चिकाळा ता.मुदखेड जि.नांदेड';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'maruti') {
        $ogImage = 'maruti.jpg';
       $title = 'श्री मारुती गुंडेवार जि. प. प्रा .शाळा ,लक्ष्मी नगर, नवी आबादी ,येळेगाव. ता अर्धापूर ,जि नांदेड. ';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
     elseif ($user == 'shobha') {
        $ogImage = 'shobha.jpg';
       $title = 'सौ.नलाबले शोभा रामराव सहशिक्षिका जि.प.प्रा.शा.सकनूर केंद्र बा-हाळी ता मुखेड';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'gudda') {
        $ogImage = 'gudda.jpg';
       $title = 'Sunita Vitthalrao Gudda Z. P. P. Semi English School,  Wanegaon. Cl :Taroda (bk), Tq :Dist:Nanded.';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'dayanand') {
        $ogImage = 'dayanand.jpg';
       $title = ' श्री.दयानंद शेशेराव कोणजीवाले  मुख्याध्यापक   जि.प.प्रा.शाळा, पळसवाडी  केंद्र - मनाठा ता.हदगाव जि.नांदेड ';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'devre') {
        $ogImage = 'devre.jpg';
       $title = 'देवरे सीमा उखा  विषयशिक्षिका    के.प्रा. शा. वाजेगाव, ता.नांदेड';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'raviraj') {
        $ogImage = 'raviraj.jpg';
       $title = ' श्री रविराज संग्राम केसराळीकर  प्रा.पद.(एम.ए. बी. एड.) जि. प.प्रा.शा. कल्हाळी  केंद्र.रुई ता.कंधार जि. नांदेड ';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'omkar') {
        $ogImage = 'omkar.jpg';
       $title = ' ओमकार धोंडोपंत बोधनकर  जि.प.कें.प्रा.शाळा, गोलेगाव(प.कं.), ता. लोहा, जि.नांदेड ';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'gitte') {
        $ogImage = 'gitte.jpg';
       $title = ' Pradeep Bhanudasrao Gitte  सह शिक्षक जिल्हा परिषद प्राथमिक शाळा मानसिंगवाडी ता कंधार जि नांदेड';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
     elseif ($user == 'rupali') {
        $ogImage = 'rupali.jpg';
       $title = 'सौ.रूपाली कांतराव गोजवडकर सहशिक्षिका जि.प.कें.प्रा.शाळा वाजेगाव ता.जि.नांदेड';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'tawar') {
        $ogImage = 'tawar.jpg';
       $title = ' श्री.संदीप तवर  सहशिक्षक जिजामाता प्रा शा फुलेनगर नांदेड';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'shinde') {
        $ogImage = 'shinde.jpg';
       $title = ' शिंदे लक्ष्मण विनायकराव जि.प.प्रा.शा.देगाव (बु.) ता.अर्धापूर जि.नांदेड';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'kachamande') {
        $ogImage = 'kachamande.jpg';
       $title = 'Sunil Datta Kachamande.  Z.p.p.s.Harbal. C.p.s.sakhar karkhana Gandhinagar. Tq.Loha. Dist Nanded';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'badnapurkar') {
        $ogImage = 'badnapurkar.jpg';
       $title = 'Mahesh Bhaskarrao Badnapurkar Z.P.H.S.Rohipimpalgaon Dist Nanded';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'pralobh') {
        $ogImage = 'pralobh.jpg';
       $title = 'प्रलोभ माधवराव कुलकर्णी जि. प. हा. वाघी, ता. जि. नांदेड ';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'ashwini') {
        $ogImage = 'ashwini.jpg';
       $title = 'सौ.अश्विनी कोतवाड कस्तुरबा गांधी बालिका विद्यालय, बिलोली';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'bodhankar') {
        $ogImage = 'bodhankar.jpg';
       $title = 'Sarika J. Bodhankar Z. P. P. School Bhendegav. Kendra  Shevadi Tq. Loha';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'mekale') {
        $ogImage = 'mekale.jpg';
       $title = 'Shri Sanjay Gyanoba Mekale Z.P.P.S.Gaul cps Ambulga  Tq.Kandhar ';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'yenure') {
        $ogImage = 'yenure.jpg';
       $title = 'सौ.वर्षा येनुरे जि.प.उच्च प्रा.शाळा बेरळी (बु) ता.मुखेड जि.नांदेड ';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'yusuf') {
        $ogImage = 'yusuf.jpg';
       $title = 'Yusuf Khan M. Khan ZPCPS WAJEGAON Dist Nanded';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'swati') {
        $ogImage = 'swati.jpg';
       $title = 'सौ.स्वाती पत्तेवार/कटकमवार  जि. प. प्रा .शा .नवी आबादी कापसी बु ता .लोहा  जि. नांदेड';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'rani') {
        $ogImage = 'rani.jpg';
       $title = 'राणी  श्रीधर  मंडलिक कुंजीर  पब्लिक  स्कूल. ';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'surekha') {
        $ogImage = 'surekha.jpg';
       $title = 'सौ. सुरेखा तवर सहशिक्षिका जि प प्रा शा निपाणी ता.जि.औरंगाबाद';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'rajiv') {
        $ogImage = 'rajiv.jpg';
       $title = 'Rajiv more Zpcps Manatha TQ. Hadgaon Dist.Nanded';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'skendre') {
        $ogImage = 'skendre.jpg';
       $title = 'सीमा व्यंकटराव केंद्रे-कातकडे ';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'prem') {
        $ogImage = 'prem.jpg';
       $title = 'प्रेमकुमार गणपतराव कातकडे रा.जि. प.शाळा - निवाची नळेफोडी ता.माणगाव जि.रायगड ';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
     elseif ($user == 'bamnikar') {
        $ogImage = 'bamnikar.jpg';
       $title = 'Bamnikar Laxmikant Gocindrao Z p c p s kasrali tq Biloli Dist Nanded';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'jyotig') {
        $ogImage = 'jyotig.jpg';
       $title = 'गायकवाड ज्योती निळकंठ  के. जी .बी.व्ही.बिलोली. ';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'anuradha') {
        $ogImage = 'anuradha.jpg';
       $title = 'सौ खांडेकर अनुराधा चंद्रकांत जि. प. प्रा. शा. हसनाळ (प. दे) ता. मुखेड केंद्र. पाळा । जि नांदेड';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'minakshi') {
        $ogImage = 'minakshi.jpg';
       $title = 'मिनाक्षी संतोष बनसोडे जि.प. शाळा भुंइज नं 1 ता वाई जि सातारा ';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'bhurke') {
        $ogImage = 'bhurke.jpg';
       $title = 'मारोती माधवराव भुरके जि प हा तामसा';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'eknath') {
        $ogImage = 'eknath.jpg';
       $title = 'Eknath shivaji kendre Z. P. C. P. S Usmannagar Ta. Kandhar';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'fulari') {
        $ogImage = 'fulari.jpg';
       $title = 'श्रीमती मीनाक्षी मारुतीराव फुलारी जिल्हा परिषद प्राथमिक शाळा नांदुसा  ';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    } elseif ($user == 'mohin') {
        $ogImage = 'mohin.jpg';
       $title = 'शेख मोहीन शेख ताहेर जि. प. प्रा. शाळा,सावरगाव माळ  ता हदगाव जि नांदेड';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'langewar') {
        $ogImage = 'langewar.jpg';
       $title = 'सुरेश नत्थु लांजेवार पंडित जवाहरलाल नेहरू सेमी इंग्लिश प्रायमरी स्कूल सानगडी तालुका साकोली जिल्हा भंडारा ';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'doibale') {
        $ogImage = 'doibale.jpg';
       $title = 'सुनिल राजेश्वरराव डोईबळे जिल्हा परिषद प्राथमिक शाळा सोमठाणा ता. नायगाव ';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'bhange') {
        $ogImage = 'bhange.jpg';
       $title = 'अनिता रामराव भांगे/केंद्रे जि प प्रा.शा.सुगाव खु कें.पिंपळगाव को.ता जि नांदेड  ';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'sadhu') {
        $ogImage = 'sadhu.jpg';
       $title = 'शिवराज गुरुबसअप्पा साधु जि.प.प्रा.शाळा नायगाव कॅम्प संकुल नायगाव ता.नायगाव  ';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'mudasir') {
        $ogImage = 'mudasir.jpg';
       $title = 'मुदस्सर अहमद जि.प.कें.प्रा.शा.वाजेगाव ';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'totawad') {
        $ogImage = 'totawar.jpg';
       $title = 'श्रीमती शोभा तोटावाड जि प प्रा शा हिप्परगा थडी ';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'tupkar') {
        $ogImage = 'Tupkar.jpg';
       $title = 'Uddhav Motiram Tupkar ZPPS Kalhali tq.kandhar ';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'shankar') {
        $ogImage = 'shankar.jpg';
       $title = 'शंकर जयराम कुद्रे   जि. प. प्रा. शाळा सांगवी(उमर) ता. देगलूर जि. नांदेड ';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'manoj') {
        $ogImage = 'gurle.jpg';
       $title = 'श्री. मनोज पांचाळ जिल्हा परिषद प्राथमिक शाळा गोबरा तांडा, केंद्र बारड  ता मुदखेड जि नांदेड ';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'gurle') {
        $ogImage = 'gurle1.jpg';
       $title = 'GURLE B. V. Z.P.P.S.ADAMPUR TQ.BILOLI DIST.NANDED ';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'gutte') {
        $ogImage = 'manoj.jpg';
       $title = 'गुट्टे बालाजी जि प उच्च प्रा शा नागेली तालुका मुदखेड';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'dane') {
        $ogImage = 'dane.jpg';
       $title = 'अनिता तुकाराम दाणे जि प प्रा शाळा धर्मापुरी तांडा ता कंधार जि नांदेड ';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'borse') {
        $ogImage = 'borse.jpg';
       $title = 'रविंद्र रामचंद्र बोरसे प्राथमिक शिक्षक जिल्हा परिषद प्राथमिक शाळा न्यु.पांझण ता. नांदगाव जि.नाशिक';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'moghe') {
        $ogImage = 'moghe.jpg';
       $title = 'Smt. Moghe. S. G. Z. P. P. S. Somthana tanda tq Bhokar Dist Nanded ';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'bhakre') {
        $ogImage = 'bhakre.jpg';
       $title = 'प्रदीप खंडेराव भाकरे जिप शाळा धोत्रे मराठी कोपरगाव अहमदनगर';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'akshay') {
        $ogImage = 'akshay.jpg';
       $title = 'अक्षय अशोक ढोके तंत्रस्नेही शिक्षक जि प प्रा शा नागापूर केंद्र वाजेगाव ता. जि.नांदेड';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'sadhana') {
        $ogImage = 'sadhana.jpg';
       $title = 'साधना दत्तात्रय बेंद्रे सहशिक्षिका जि प प्रा शा वाडी पुयड नवीन केंद्र वाजेगाव ता.जि.नांदेड ';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'shirish') {
        $ogImage = 'shirish.jpg';
       $title = 'शिरीषकुमार लोणकर जि.प.कें. प्रा.शाळा पाथरड, ता.हदगाव, जि.नांदेड';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
     elseif ($user == 'sunitaanbhule') {
        $ogImage = 'sunitaanbhule.jpg';
       $title = 'सुनिता पांडुरंग अनभुले  अभिनव प्राथमिक शाळा, दादर ';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'vilaspure') {
        $ogImage = 'vilaspure.jpg';
       $title = 'शिवाजी विलासपुरे ZPPS दयाळधानोरा तांडा केंद्र शिवणी ता. किनवट';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'mangesh') {
        $ogImage = 'mangesh.jpg';
       $title = 'Mangesh Kacharu  Jadhav  Headmaster Shri Sainath Highschool Alkuti Tal Parner Dist Ahmednager';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'ravindra') {
        $ogImage = 'ravindra.jpg';
       $title = 'रवींद्र व्यंकटराव वगावाड. जिल्हा परिषद शाळा बनचिंचोली,ता हदगाव जि नांदेड';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
     elseif ($user == 'triveni') {
        $ogImage = 'triveni.jpg';
       $title = 'झाडे ञिवेणी धोंडिबा जि.प.प्रा.शा.वाटेगाव केंद्र कन्या हदगाव ता.हदगाव जि.नांदेड ';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'deosarkar') {
        $ogImage = 'deosarkar.jpg';
       $title = ' S.P. Deosarkar  Z.p.p. school chikhli khandar Dist Nanded ';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'bhalekar') {
        $ogImage = 'bhalekar.jpg';
       $title = 'शीतल भालेकर स.शि.जि.प.प्रा.शाळा पिंपळगाव ता.नायगाव जि.नांदेड ';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'dhotre') {
        $ogImage = 'dhotre.jpg';
       $title = 'Bhagyashree Ramrao Dhotre Z.P.P.S.MARALAK KHU  .CPS  NILA TQ.NANDED  DIST.NANDED ';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'kotgire') {
        $ogImage = 'kotgire.jpg';
       $title = 'Satish Hanmantrao kotgire  Asst Teacher - Z.P.P.School Bellur (bk) cps - Balapur TQ - Dharmabad Dist - Nanded.';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'sadashiv') {
        $ogImage = 'sadashiv.jpg';
       $title = 'श्री.सदाशिव देवाजी पाटील जि प केंद्रशाळा लोणखेडा नं.१ ता.शहादा जि.नंदुरबार';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'vikas') {
        $ogImage = 'vikas.jpg';
       $title = 'विकास बाबुराव जाकापुरे जि प प्रा शा विळेगाव थडी';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'dhanraj') {
        $ogImage = 'dhanraj.jpg';
       $title = 'श्री कानवटे धनराज विठ्ठलराव. जिल्हा परिषद उच्च प्राथमिक शाळा हिंगणी केंद्र - हडसणी ता. माहूर जि. नांदेड.';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'jd') {
        $ogImage = 'jd.jpg';
       $title = 'जे.डी.कदम  जि. प.प्रा.शाळा, खुपसरवाडी, ता.जि.नांदेड';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'gurme') {
        $ogImage = 'gurme.jpg';
       $title = 'श्री गुरमे मोहन सतिश तंत्रस्नेही शिक्षक जिल्हा परिषद प्राथमिक शाळा नागापूर ता. भोकर जि. नांदेड';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'jyotih') {
        $ogImage = 'jyotih.jpg';
       $title = 'ज्योती हंबर्डे जि.प.प्रा.शाळा डेरला, केंद्र-सोनखेड,ता.लोहा';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'kshatriya') {
        $ogImage = 'kshatriya.jpg';
       $title = 'Ashwini Kshatriya.   ZPPS EKDARA NANDED  Happy to learn more about teaching.ा';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'trupti') {
        $ogImage = 'trupti.jpg';
       $title = 'श्रीमती तृप्ती आटीपामलू जि प प्रा शा त्रिकुट केंद्र वाजेगाव ता जि नांदेड';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    elseif ($user == 'om') {
        $ogImage = 'om.jpg';
       $title = 'Omprakash Suryawanshi ZPPS UMRI J Tq Hadgaon District Nanded ';
       $desc = 'तंत्रस्नेही शिक्षक'; 
    }
    elseif ($user == 'geeta') {
        $ogImage = 'geeta.jpg';
       $title = 'सौ गीता दशरथ लोकरे, जिल्हा परिषद प्राथमिक शाळा पिंपळगाव, नांदेड';
      $desc = 'तंत्रस्नेही शिक्षिका '; 
    }
    else {
        $ogImage = 'bpegm.jpg';
        $title = 'Blog For Primary Educational Group Of Maharashtra';
        $desc = 'Blog For Primary Educational Group Of Maharashtra';
    } 
}
?>