import React, { createContext, useContext, useState, useEffect } from 'react';

const LanguageContext = createContext();

export const useLanguage = () => useContext(LanguageContext);

export const LanguageProvider = ({ children }) => {
  const [language, setLanguage] = useState('ar');

  useEffect(() => {
    document.documentElement.dir = language === 'ar' ? 'rtl' : 'ltr';
    document.documentElement.lang = language;
  }, [language]);

  const toggleLanguage = () => {
    setLanguage((prevLang) => (prevLang === 'ar' ? 'en' : 'ar'));
  };

  const translations = {
    ar: {
      heroTitle: "أهلاً وسهلاً... هذا الموقع هو بوابتنا لخدمتكم، وهذه أعمالنا اللي بنفتخر فيها:",
      heroSubtitle: (
        <span className="products-intro">
          <br /><br />
          <a href="https://flow.sndry.net" target="_blank" rel="noopener noreferrer" style={{textDecoration: 'underline', color: '#fff', fontWeight: 'bold'}}>Flow</a>: منصة متكاملة لإدارة الفعاليات والمناسبات. سواءً كنت بتنظم زفافك أو مؤتمر أو مناسبة خاصة، فلو توفرلك كل الأدوات اللي تحتاجها لتنظيم الفعالية من الألف للياء بكفاءة عالية، تربطك بالمنفذين و القاعات و تبني تصميم مناسبتك بطريقتك مع واجهة سهلة الاستخدام تناسب الجميع.
          <br /><br />
          <a href="https://erp.sndry.net" target="_blank" rel="noopener noreferrer" style={{textDecoration: 'underline', color: '#fff', fontWeight: 'bold'}}>SaaS ERP</a>: نظام متكامل لإدارة الموارد والعمليات داخل الشركات. يتيح لك متابعة جميع أقسام عملك داخل المكتب وخارجه من مكان واحد، ويساعدك على تنظيم أعمالك وتطويرها بشكل احترافي.
          <br /><br />
          <a href="https://pos.sndry.net" target="_blank" rel="noopener noreferrer" style={{textDecoration: 'underline', color: '#fff', fontWeight: 'bold'}}>POS</a> <span dir="rtl">(متوفر في مصر)</span>: نظام نقاط بيع ذكي صمم خصيصاً للسوق المصري. تم تطويره بواسطة فريقنا في القاهرة ليتناسب مع طبيعة التجارة والأعمال في مصر، مع دعم كامل للتعاملات المحلية والمتطلبات الخاصة بالسوق.
          <br /><br />
          <a href="https://sami.sndry.net" target="_blank" rel="noopener noreferrer" style={{textDecoration: 'underline', color: '#fff', fontWeight: 'bold'}}>SAMI AI</a>: مساعدك التسويقي الذكي. صممناه عشان يساحبك في عالم التسويق الرقمي حتى لو ما عندك خلفية مسبقة فيه. يقدر ينشئ لك حملات إعلانية، يحللك المنافسين، يتابع الترندات، ويعمل جدولة تلقائية للمحتوى. كمان يكشف لك البوتات المزعجة اللي تستنزف ميزانيتك، ويحمي بيانات حساباتك بشكل آمن.
          <br /><br />
          إحنا شركة سعودية، وعندنا فريق متخصص في القاهرة بيوفر دعم مباشر لعملائنا في مصر. هدفنا نبسط لك التقنية ونخليها أداة فعلية تنمي بها عملك.
        </span>
      ),
      startHere: "ابدأ من هنا",
      explore: "استكشف",
      learnMore: "تعرف على",
      hireSami: "وظّف SAMI الآن",
      availableIn: "متوفر في:",
      moreToCome: "نحن لا نتوقف هنا. المزيد من الأدوات المبتكرة في طريقها إليك.",
      products: {
        commitment: {
          name: "الالتزام بالاستقلال",
          desc: "نحن هنا لنصنع الفارق بشروطنا. لا تحكمنا مجالس إدارات تسعى للربح السريع، ولا مستثمرون يملون علينا خياراتنا. استقلاليتنا المطلقة تمنحنا الجرأة لنبتكر بشغف، ونجازف حيث يتراجع الآخرون، ولنبني لك أدوات تضع نجاحك أولاً. نحن نختار المسار الأصعب، لأننا نؤمن بأن الإبداع الحقيقي لا يقبل المساومة."
        },
        smallTeams: {
          name: "الفرق الصغيرة",
          desc: "نؤمن بأن الإنجازات العظيمة لا تتطلب جيوشاً من الموظفين، بل عقولاً ذكية ومركزة. الفرق الصغيرة تتحرك بسرعة، تتخذ القرارات بمرونة، وتركز على ما يهم حقاً دون تعقيدات إدارية. نحن نختار القوة الكامنة في العدد القليل لنمنحك القيمة الحقيقية دون مبالغة، لأن الأقل غالباً ما يعني الأفضل والأكثر تأثيراً."
        },
        privacy: {
          name: "نحن لا نبيع بياناتك",
          desc: "يظن الكثيرون في العصر الرقمي أن بياناتك هي السلعة الأثمن. لكن الأمر مختلف لدينا تماماً. نحن نرفض بشكل قاطع المتاجرة بمعلومات عملائنا أو استغلالها لغايات إعلانية. معادلتنا بسيطة، واضحة ومباشرة: نحن نبني أدوات احترافية، وأنت تدفع مقابل استخدامها، وتنتهي الصفقة هنا. نموذج عملنا يعتمد كلياً على بيع منتجات تلبي تطلعاتك، وليس بيع خصوصيتك للآخرين."
        },
        sme: {
          name: "ملايين الشركات، وليس حيتان السوق",
          desc: "تتصارع الشركات التقنية الكبرى للفوز بعقود 'حيتان السوق' والشركات بمليارات الريالات. نحن نرى أن هذا المسار تقليدي وممل. شغفنا الحقيقي ينصب على ملايين الشركات الصغيرة والمتوسطة والمشاريع الناشئة في امتداد الوطن العربي. إنهم العصب الحقيقي لاقتصادنا، ورغم ذلك غالباً ما يتم تجاهل احتياجاتهم أو استغلالهم بأسعار مبالغ فيها. نحن هنا للوقوف بجانبهم، لندعم طموحاتهم بأدوات عالمية، ولنمنحهم التكنولوجيا والاحترام الذي يستحقونه للنمو."
        },
        remoteWork: {
          name: "لا تستنسخ بيئة المكتب",
          desc: "العمل عن بُعد لا يعني أن تنقل روتين المكتب بكامل ملله إلى شاشتك. لا تكتفِ بنقل اجتماعاتك الطويلة إلى منصات الفيديو، بل تخلص منها. بدلاً من الإزعاج المستمر في الوقت الفعلي، اعتمد التواصل غير المتزامن لتعطي فريقك مساحة للإبداع والتركيز. تخلّص من هوس المراقبة اللحظية وثق بفريقك أكثر. لا تحاول تقليد جدران المكتب وقيوده في العالم الرقمي.. بل تمرد عليها وابنِ ثقافة قائمة على الإنتاج والحرية."
        },
        hoursNotEqual: {
          name: "الساعات ليست متساوية",
          desc: "الساعة ليست مجرد 60 دقيقة عابرة. الستون دقيقة المتواصلة تصنع إنجازاً مبهراً، بينما الساعة الممزقة إلى أجزاء تتخللها المقاطعات لا تصنع شيئاً. العمل المتواصل هو مفتاح الجودة والإبداع الحقيقي، بينما الأيام المقسمة إلى فترات زمنية مبعثرة هي أسوأ بيئة يمكن أن تعمل فيها. نحن نحمي وقتنا بصرامة لضمان أعلى مستويات التركيز."
        },
        repetition: {
          name: "فخ التكرار",
          desc: "أي مهمة تقوم بها يومياً وبنفس الطريقة المتكررة هي ببساطة إهدار لوقتك وموهبتك. الروتين الأعمى لا يصنع التقدم، لذا يجب أن تفكر دائماً خارج الصندوق وتبحث عن الأدوات التي تختصر هذا الجهد. نحن نؤمن بأن الذكاء يكمن في ابتكار حلول تغير النتائج وتمنحك وقتك وحريتك، وليس في تكرار نفس المجهود كل يوم."
        },
        meetingsNotFree: {
          name: "الاجتماعات ليست مجانية",
          desc: "الاجتماع يجب أن يكون دائماً الملاذ الأخير، وليس الخيار الأول. حشر خمسة أشخاص في غرفة لمدة ساعة لا يعني أنك استهلكت ساعة واحدة، بل استنزفت خمس ساعات من وقت الفريق. كم مرة كان الأمر يستحق هذا الثمن؟ ألم يكن بإمكانك كتابة رسالة واضحة بدلاً من إيقاف عجلة العمل؟ نحن ندرك التكلفة الحقيقية للمقاطعات، ولا نعقد الاجتماعات إلا عندما تكون حتمية وعائدها استثنائياً."
        },
        marginalThinking: {
          name: "فخ التفكير الهامشي",
          desc: "التردد في الاستثمار بالأدوات الصحيحة هو أغلى تكلفة يمكن أن تدفعها. كما قيل: 'إذا كنت بحاجة إلى أداة ولم تشتريها، فستكتشف بالنهاية أنك دفعت ثمنها بالكامل من وقتك وجهدك المهدور.. ولا زلت لا تملكها'. التفكير الهامشي يخدعك بالتوفير الوهمي، بينما يسرق كفاءتك وتنافسيتك كل يوم. نحن نستثمر بلا تردد في التقنيات التي تضاعف إنتاجيتنا، لأننا نعلم أن تكلفة الحلول الرخيصة باهظة جداً."
        },
        stayups: {
          name: "شركات صامدة، لا ناشئة",
          desc: "العالم مهووس بمصطلح 'الشركات الناشئة' التي تسعى للاحتراق السريع. نحن ننحاز للشركات 'الصامدة' (Stayups) التي أثبتت قيمتها الحقيقية وبنت أساساً متيناً للبقاء والاستدامة. الشركات التي تصمد وتستمر هي وحدها التي تلهم الثقة، فالبقاء ليس صدفة بل دليل على الجودة المتأصلة. وعلى هذا النحو، نحن فخورون وممتنون بأن عام 2026 يمثل عامنا الرابع من الاستمرارية والالتزام المطلق بنجاح عملائنا."
        },
        globalVision: {
          name: "رؤية عالمية",
          desc: "عبر منصاتنا المتعددة مثل SaaS ERP و SAMI، تمتد طموحاتنا لتتخطى الحدود الجغرافية. نحن نبني منتجات بمعايير عالمية تنافس محلياً ودولياً، وفريقنا المبدع يعمل بمرونة ليكسر القيود. وجهة نظرنا لم تعد محدودة بعدسة أحادية، بل بُنيت على وعي شامل يمنحنا فهماً أعمق لما يحتاجه السوق الفعلي، أينما كان."
        },
        miscommunication: {
          name: "لعنة سوء التواصل",
          desc: "الشركات لا تعاني من نقص في التواصل، بل تعاني من التخمة في 'سوء التواصل'. كلما اتسع حجم الفريق، تضخمت مساحة سوء الفهم. كثرة الرسائل لا تصنع الوضوح، بل تخلق ضجيجاً. وكما يقال: 'إذا كان هناك احتمال لإساءة فهم الرسالة، فستُفهم حتماً بالطريقة التي تسبب أكبر ضرر'. لذلك، نحن نضع ثقتنا في الفرق الصغيرة والتواصل المكتوب بوضوح قاطع، لأن الصمت المدروس خير من تواصل يقود للفوضى."
        },
        easyTrap: {
          name: "فخ الـ 'سهل'",
          desc: "كلمة 'سهل' هي الكلمة التي يستخدمها البعض لتبسيط مهام الآخرين. نحن نحذر بشدة من التقليل من شأن أي عمل لا نعرف تفاصيله. افتراض أن الأشياء التي لا تمارسها يومياً هي 'سهلة' هو قمة الغرور المهني. لذلك، نحن نحترم تعقيد كل دور ونمنح كل تفصيلة وزنها الحقيقي، لأن النجاح الاستثنائي لا يُبنى أبداً على تهميش جهود الآخرين."
        },
        notFamily: {
          name: "الشركات ليست عائلات",
          desc: "عندما تدّعي الشركات أنها 'عائلة'، فهي غالباً حيلة مبطنة لطلب التضحية المطلقة بوقتك؛ سهر الليالي والعمل أيام الإجازات بحجة الولاء. نحن نرفض هذه الازدواجية، فالشركات العظيمة لا تدّعي أنها عائلة بديلة، بل هي حليف وداعم قوي لعائلتك الحقيقية. نحن لا نسرق وقتك الشخصي، ولا نتوقع منك الرد على رسائل العمل يوم الجمعة، ولا نضغط عليك للعمل يوم السبت للتحضير لاجتماعات الأحد. وقتك خارج العمل هو ملكك بالكامل."
        },
        vision2030: {
          name: "رؤية 2030",
          desc: "نحن لا نبني برمجيات فقط؛ بل نبني مستقبلاً يليق بطموح المملكة العربية السعودية. في ظل رؤية 2030، لم يعد سقف أحلامنا السماء، بل بات هو نقطة الانطلاق. نؤمن بشدة أن العبقرية السعودية قادرة على تصميم أنظمة ومنصات تتفوق على المعايير العالمية. التزامنا للوطن الحبيب هو عمل دؤوب لنكون جزءاً أصيلاً من تحوله الرقمي السريع؛ مبدعين لا مجرد مستهلكين، وشركاء حقيقيين في قصة نجاح تُكتب فصولها الآن على تراب هذا الوطن العظيم."
        },
        digitalCraft: {
          name: "حرفة رقمية",
          desc: "نحن لا نرى البرمجة مجرد أسطر من الأكواد، بل نتناولها كحرفة فنية تتطلب الدقة والإتقان. كل واجهة، وكل تفاعل صُمم بعناية فائقة ليعكس أرقى معايير الجودة ويمنحك تجربة لا تُنسى. نؤمن أن البساطة الظاهرة تخفي خلفها تعقيداً هندسياً مدروساً بحب."
        }
      }
    },
    en: {
      heroTitle: "Welcome... This site is our gateway to serving you, and these are the products we take pride in:",
      heroSubtitle: (
        <span className="products-intro">
          <br /><br />
          <a href="https://flow.sndry.net" target="_blank" rel="noopener noreferrer" style={{textDecoration: 'underline', color: '#fff', fontWeight: 'bold'}}>Flow</a>: A comprehensive events and occasions management platform. Whether you are organizing your wedding, a conference, or a private event, Flow provides all the tools you need to organize your event seamlessly from A to Z with high efficiency. It connects you with vendors and venues, enabling you to design your event your way with a user-friendly interface that suits everyone.
          <br /><br />
          <a href="https://erp.sndry.net" target="_blank" rel="noopener noreferrer" style={{textDecoration: 'underline', color: '#fff', fontWeight: 'bold'}}>SaaS ERP</a>: An integrated system for managing resources and operations within companies. It allows you to monitor all your company's departments inside and outside the office from one place, helping you to organize and develop your business professionally.
          <br /><br />
          <a href="https://pos.sndry.net" target="_blank" rel="noopener noreferrer" style={{textDecoration: 'underline', color: '#fff', fontWeight: 'bold'}}>POS</a> (Available in Egypt): A smart point-of-sale system designed specifically for the Egyptian market. It was developed by our team in Cairo to align with the nature of trade and business in Egypt, fully supporting local transactions and specific market requirements.
          <br /><br />
          <a href="https://sami.sndry.net" target="_blank" rel="noopener noreferrer" style={{textDecoration: 'underline', color: '#fff', fontWeight: 'bold'}}>SAMI AI</a>: Your intelligent marketing assistant. We designed it to accompany you in the digital marketing world, even if you have no prior background. It can generate ad campaigns, analyze competitors, follow trends, and automatically schedule content. Moreover, it detects annoying bots that drain your budget and secures your account data safely.
          <br /><br />
          We are a Saudi company, and we have a specialized team in Cairo providing direct support to our clients in Egypt. Our goal is to simplify technology and make it an active tool to grow your business.
        </span>
      ),
      startHere: "Start here",
      explore: "Explore",
      learnMore: "Learn more about",
      hireSami: "Hire SAMI Now",
      availableIn: "Available in:",
      moreToCome: "We don't stop here. More innovative tools are on the way.",
      products: {
        commitment: {
          name: "Commitment to Independence",
          desc: "We’re here to make a difference on our own terms. No boards chasing quick wins, and no investors dictating our roadmap. Our absolute freedom gives us the audacity to build with passion, take risks where others play it safe, and craft tools that truly prioritize your success. We choose the brave, original path, because true innovation demands total independence."
        },
        smallTeams: {
          name: "Small Teams",
          desc: "We believe that big impact doesn't require massive headcounts, but sharp, focused minds. Small teams move faster, pivot with agility, and zero in on what truly matters without bureaucratic friction. We leverage the power of staying lean to strip away the excess and deliver pure value, because doing more with less is the ultimate competitive advantage."
        },
        privacy: {
          name: "We Don't Sell You",
          desc: "In the digital age, many believe that your data is the ultimate product. Not here. We fundamentally refuse to monetize our customers' personal information or exploit it for targeted advertising. Our equation is remarkably simple and fully transparent: we engineer professional tools, you pay to use them, and the transaction is complete. Our business model is built entirely on selling great products, never on selling your privacy."
        },
        sme: {
          name: "The Millions, Not The Whales",
          desc: "Massive tech firms are obsessed with fighting over contracts with industry 'whales' and billion-riyal conglomerates. We find that path boring. Our true passion lies with the millions of small and medium-sized businesses and local startups across the Arab world. They are the backbone of our economy, yet they are often underserved, ignored, or overcharged. We are here to stand in their corner, empowering their ambitions with powerful tools and giving them the respect they truly deserve."
        },
        remoteWork: {
          name: "Don't Clone the Office",
          desc: "Remote work shouldn't mean copying the office routine, boredom included, onto your screen. Don't just move your long meetings to Zoom; eliminate them. Instead of endless real-time chatter, switch to asynchronous communication to give your team room to focus. Drop the obsession with constant surveillance and start trusting your people. Don't try to replicate the physical office and its constraints in your digital space, rebel against it and build a culture driven by pure productivity and freedom."
        },
        hoursNotEqual: {
          name: "Hours Are Not Equal",
          desc: "An hour is never just 60 minutes. A continuous, uninterrupted 60-minute stretch produces breathtaking results, while an hour fractured into tiny blocks by interruptions produces nothing. Unbroken focus is the key to deep work and high quality. Fragmented schedules are the worst environments for productivity. We rigorously protect our time to guarantee maximum creativity."
        },
        repetition: {
          name: "The Trap of Repetition",
          desc: "Anything you do repetitively every single day is simply a waste of your time and talent. Blind routine doesn't create progress. You must think outside the box and constantly seek ways to automate these tasks to reclaim your energy. We believe true intelligence lies in inventing solutions that change the outcome forever, not in repeating the exact same effort every day."
        },
        meetingsNotFree: {
          name: "Meetings Are Not Free",
          desc: "Meetings should always be a last resort, never a first option. Pulling five people into a room for an hour doesn't cost one single hour; it consumes five collective hours of your team's time. How often is the outcome truly worth that steep price? Couldn't that discussion have been a concise message instead of halting deep work? We are acutely aware of the high cost of interruptions, and we only hold meetings when absolutely essential."
        },
        marginalThinking: {
          name: "The Trap of Marginal Thinking",
          desc: "Hesitating to invest in the right tools is the most expensive cost you will ever pay. As the saying goes, 'If you need a machine and don't buy it, you will ultimately find that you have paid for it and don't have it.' Marginal thinking deceives you with the illusion of short-term savings, while quietly stealing your efficiency every single day. We invest without hesitation in systems that multiply our productivity, because the true cost of cheap solutions is far too high."
        },
        stayups: {
          name: "Stayups, Not Startups",
          desc: "The world is obsessed with 'startups' chasing rapid growth and quick burnouts. We champion 'stayups', companies that have proven their true value and built a solid foundation designed to endure. Organizations that stand the test of time inspire genuine confidence, because longevity is never an accident; it is a testament to quality. On that note, we are incredibly proud that 2026 marks our fourth year of continuous growth and commitment to our clients."
        },
        globalVision: {
          name: "Global Vision",
          desc: "Across our diverse platforms, such as SaaS ERP and SAMI, our ambitions extend far beyond geographical borders. We build world-class products that compete on both local and international stages. Our perspective is no longer restricted to a single lens; it is built on a comprehensive awareness that gives us a deeper understanding of what the market truly needs, anywhere in the world."
        },
        miscommunication: {
          name: "The Curse of Miscommunication",
          desc: "Companies don't suffer from a lack of communication; they suffer from an overabundance of miscommunication. The larger the team, the greater the margin for misunderstanding. An overload of messages doesn't create clarity; it creates noise. As the rule goes: 'If a message can be misunderstood, it will inevitably be understood in the way that causes the most harm.' This is why we rely on small teams and relentlessly clear documentation. Calculated silence is better than chaotic noise."
        },
        easyTrap: {
          name: "The 'Easy' Trap",
          desc: "The word 'easy' is often used to oversimplify the work of others. We strictly avoid underestimating tasks whose deep complexities we don't fully see. Assuming that things you don't do routinely are 'easy' is the height of professional arrogance. We respect the intricate complexity of every role and give every effort its true weight, because exceptional success is never built on marginalizing the work of others."
        },
        notFamily: {
          name: "Companies Aren't Families",
          desc: "When companies claim to be a 'family,' it's often a thinly veiled excuse to demand absolute sacrifice. Working late nights or weekends is expected under the guise of loyalty. We reject this hypocrisy. Great companies aren't fake families; they are steadfast allies to your real family. We don't steal your personal time, we don't expect you to answer messages on a Friday, and we never pressure you to work on Saturdays to prepare for a Sunday meeting. Your time is yours."
        },
        vision2030: {
          name: "Vision 2030",
          desc: "We don't just build software; we engineer a future that matches the boundless ambition of the Kingdom of Saudi Arabia. Driven by Vision 2030, the sky is no longer the limit, it is our starting point. We firmly believe that Saudi ingenuity can design platforms that not only meet but exceed global standards. Our dedication to our beloved nation is a relentless drive to be a foundational part of its rapid digital transformation. We choose to be creators, acting as active partners in a historic success story being written right now on the soil of this great nation."
        },
        digitalCraft: {
          name: "Digital Craftsmanship",
          desc: "We don't see coding as just lines of text; it's a rigorous craft that demands precision and mastery. Every interface and interaction is meticulously designed to reflect the highest standards of quality, granting you an unforgettable experience. We believe that apparent simplicity hides deeply thoughtful engineering beneath the surface."
        }
      }
    }
  };

  const t = translations[language];

  return (
    <LanguageContext.Provider value={{ language, toggleLanguage, t }}>
      {children}
    </LanguageContext.Provider>
  );
};
