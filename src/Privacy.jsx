import React from 'react';

export default function Privacy({ onClose, dir, lang }) {
  const isArabic = lang === 'ar';

  return (
    <div className="policies-container">
      <div className="policies-content">
        <button className="back-btn" onClick={onClose}>
          {isArabic ? '← العودة' : '← Back'}
        </button>
        
        <h1>{isArabic ? 'سياسة الخصوصية' : 'Privacy Policy'}</h1>
        <p className="subtitle">
          {isArabic 
            ? 'نحن نحترم خصوصيتك بالكامل. لا نقوم ببيع بياناتك، ولا نستغلها لأهداف إعلانية مخفية. هذه هي التفاصيل.'
            : 'We completely respect your privacy. We do not sell your data, nor do we exploit it for hidden advertising. Here are the details.'}
        </p>

        <section>
          <h2>{isArabic ? 'هويتنا والجهة المسؤولة' : 'Who We Are'}</h2>
          <p>
            {isArabic
              ? 'تشير "نحن" أو "لنا" إلى SNDRY GROUP. فعندما تستخدم منتجاتنا (مثل SaaS ERP، SAMI، Flow)، نقوم بجمع الحد الأدنى من المعلومات اللازمة لتقديم خدمتك ومساعدتك. نحن لا نبيع أسرارك.'
              : '"We", "Our", or "Us" refers to SNDRY GROUP. When you use our products (like SaaS ERP, SAMI, Flow), we collect the bare minimum information needed to serve you. We do not sell your secrets.'}
          </p>
        </section>

        <section>
          <h2>{isArabic ? 'ما هي البيانات التي نجمعها؟' : 'What Data We Collect'}</h2>
          <p>
            {isArabic
              ? 'نقوم فقط بجمع المعلومات الضرورية لتشغيل حسابك وصيانته، مثل اسمك وبريدك الإلكتروني، وبيانات الفواتير الأساسية للعملاء المدفوعين. جميع اتصالاتك، ملفاتك، ومسوداتك داخل منتجاتنا هي بياناتك الخاصة بالكامل؛ ولا نطلع عليها أبداً إلا بموافقة صريحة منك لغرض الدعم الفني الطارئ.'
              : 'We only collect necessary information to operate and maintain your account, such as your name, email, and basic billing data for paid customers. All your communications, files, and drafts inside our products are your exclusive property; we never look at them unless you give us explicit permission for emergency troubleshooting.'}
          </p>
        </section>

        <section>
          <h2>{isArabic ? 'متى وكيف يمكننا الوصول إلى بياناتك؟' : 'When and How We Access Your Data'}</h2>
          <p>
            {isArabic
              ? 'خصوصيتك مقدسة. الحالات الوحيدة التي قد يصل فيها مهندسونا إلى بياناتك هي: طلبك المباشر للدعم الفني (حيث نطلب إذنك صراحة)، أو للتحقيق في خطأ برمجي يعيق النظام، أو للحفاظ على أمان المنصة ضد الاختراقات الأمنية والمحاولات الخبيثة.'
              : 'Your privacy is sacred. The only cases where our engineers might access your data are: your direct request for support (where we ask for explicit consent), investigating a critical system-crashing bug, or securing the platform against malicious security breaches.'}
          </p>
        </section>

        <section>
          <h2>{isArabic ? 'لا للبيانات المُباعة' : 'No Data Selling'}</h2>
          <p>
            {isArabic
              ? 'نموذج أعمالنا وتوجهنا الداخلي يعتمد على جودة المنتج والاشتراكات. نحن لسنا منصة إعلانات. وعليه، فإننا نضمن لك تماماً عدم تأجير، بيع، أو مشاركة بياناتك أو سلوك الاستخدام الخاص بك لأي وكالات إعلانية أو جهات تسويق لطرف ثالث تحت أي ظرف كان.'
              : 'Our business model and internal philosophy rely on product quality and subscriptions. We are not an advertising platform. Therefore, we absolutely guarantee never to rent, sell, or share your data or usage behavior with any advertising agencies or third-party marketers under any circumstances.'}
          </p>
        </section>

        <section>
          <h2>{isArabic ? 'حذف البيانات واستعادتها' : 'Data Deletion and Recovery'}</h2>
          <p>
            {isArabic
              ? 'بمجرد قيامك بإلغاء اشتراكك، تصبح بياناتك غير قابلة للوصول فوراً للعموم. نقوم بحذف محتويات حسابك بشكل دائم من الخوادم النشطة خلال 30 يوماً، وتُمسح من النسخ الاحتياطية تلقائياً خلال 60 يوماً كحد أقصى. بمجرد الحذف الدائم، لا يمكن استعادة أي معلومات.'
              : 'Once you cancel your subscription, your data becomes immediately inaccessible to the public. We permanently delete your account contents from active servers within 30 days, and it is automatically purged from backups within a maximum of 60 days. Once permanently deleted, the information cannot be recovered.'}
          </p>
        </section>

        <section>
          <h2>{isArabic ? 'تحديثات السياسة' : 'Policy Updates'}</h2>
          <p>
            {isArabic
              ? 'نحتفظ بالحق في إجراء تغييرات ضرورية على سياسة الخصوصية بما يتماشى مع الأنظمة أو التحسينات الأمنية. وفي حال حدوث تغييرات جذرية تؤثر على حقوقك، سنقوم بتبليغك مباشرة.'
              : 'We reserve the right to make necessary changes to the privacy policy in accordance with regulations or security improvements. In the case of significant changes affecting your rights, we will notify you directly.'}
          </p>
        </section>

        <section>
          <h2>{isArabic ? 'التواصل' : 'Contact Us'}</h2>
          <p>
            {isArabic ? 'للأسئلة أو لممارسة حقوق الخصوصية الخاصة بك، يُرجى التواصل عبر البريد الإلكتروني:' : 'For questions or to exercise your privacy rights, please contact us via email:'} <br />
            <a href="mailto:info@sndry.net" style={{display: 'inline-block', marginTop: '10px'}}>info@sndry.net</a>
          </p>
        </section>
      </div>
    </div>
  );
}
