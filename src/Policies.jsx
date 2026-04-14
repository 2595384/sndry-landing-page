import React from 'react';

export default function Policies({ onClose, dir, lang }) {
  const isArabic = lang === 'ar';

  return (
    <div className="policies-container">
      <div className="policies-content">
        <button className="back-btn" onClick={onClose}>
          {isArabic ? '← العودة' : '← Back'}
        </button>
        
        <h1>{isArabic ? 'السياسات وشروط الخدمة' : 'Policies & Terms of Service'}</h1>
        <p className="subtitle">
          {isArabic 
            ? 'جميع الشروط والسياسات التي توافق عليها عند استخدام أحد منتجات SNDRY GROUP.'
            : 'All the terms and policies you agree to when you use a SNDRY GROUP product.'}
        </p>

        <section>
          <h2>{isArabic ? 'التعريفات' : 'Definitions'}</h2>
          <p>
            {isArabic
              ? 'تشير "الشركة" أو "نحن" أو "لنا" في أي من سياساتنا وشروطنا إلى مجموعة SNDRY GROUP. تشير كلمة "الخدمات" إلى منصاتنا وأي منتج يتم إنشاؤه وتطويره بواسطة SNDRY GROUP، مثل SaaS ERP و SAMI و Flow.'
              : '"Company", "we", "our", or "us" in any of our policies refers to SNDRY GROUP. "Services" refers to our platforms and any product created and maintained by SNDRY GROUP, such as SaaS ERP, SAMI, and Flow.'}
          </p>
        </section>

        <section>
          <h2>{isArabic ? 'شروط الحساب' : 'Account Terms'}</h2>
          <p>
            {isArabic
              ? 'أنت مسؤول عن الحفاظ على أمان حسابك وكلمة المرور الخاصة بك والتأكد من قيام أي من المستخدمين التابعين لك بنفس الشيء. لا يمكن ولا تتحمل الشركة مسؤولية أي خسارة أو ضرر ناتج عن فشلك في الامتثال لهذا الالتزام الأمني. نوصي جميع المستخدمين بإعداد المصادقة الثنائية لمزيد من الأمان. أنت مسؤول مسؤولية كاملة عن جميع المحتويات المنشورة والنشاط الذي يحدث من خلال حسابك.'
              : 'You are responsible for maintaining the security of your account and password and for ensuring that any of your users do the same. The Company cannot and will not be liable for any loss or damage from your failure to comply with this security obligation. We recommend all users set up two-factor authentication for added security. You are responsible for all content posted and activity that occurs under your account.'}
          </p>
        </section>

        <section>
          <h2>{isArabic ? 'الإلغاء والإنهاء' : 'Cancellation and Termination'}</h2>
          <p>
            {isArabic
              ? 'أنت وحدك المسؤول عن الإلغاء الصحيح لحسابك. سيتم إيقاف وصولك إلى محتواك فور إلغاء الحساب. نحن نحتفظ بالحق في تعليق أو إنهاء حسابك ورفض أي وكل استخدام حالي أو مستقبلي لخدماتنا لأي سبب في أي وقت.'
              : 'You are solely responsible for properly canceling your account. All of your content will be inaccessible immediately upon account cancellation. We reserve the right to suspend or terminate your account and refuse any and all current or future use of our Services for any reason at any time.'}
          </p>
        </section>

        <section>
          <h2>{isArabic ? 'تعديلات الخدمة والأسعار' : 'Modifications to the Service and Prices'}</h2>
          <p>
            {isArabic
              ? 'نحتفظ بالحق في أي وقت بتعديل أو إيقاف أي جزء من خدماتنا مؤقتاً أو دائماً مع أو بدون إشعار مسبق. في حال تغيير الأسعار للعملاء الحاليين، سنقوم بتقديم إشعار مسبق لا يقل عن 30 يوماً.'
              : 'We reserve the right at any time to modify or discontinue, temporarily or permanently, any part of our Services with or without notice. If we choose to change the prices for existing customers, we will give at least 30 days notice.'}
          </p>
        </section>

        <section>
          <h2>{isArabic ? 'الملكية الفكرية والمحتوى' : 'Copyright and Content Ownership'}</h2>
          <p>
            {isArabic
              ? 'أنت تمنحنا ترخيصاً لاستخدام المحتوى المرفوع منك لتوفير الخدمات لك، ولكننا لا نملك أي حقوق ملكية عليه. الشركة تمتلك جميع الحقوق والملكية في الخدمات، فلا يجوز لك نسخ أو إعادة استخدام أي جزء من التصميم أو الهيكل البرمجي بدون إذن خطي صريح منا.'
              : 'You give us a limited license to use the content posted by you in order to provide the Services to you, but we claim no ownership rights over those materials. The Company owns all right, title, and interest in and to the Services. You may not duplicate, copy, or reuse any visual design elements or code without our express written permission.'}
          </p>
        </section>

        <section>
          <h2>{isArabic ? 'التواصل ودعم العملاء' : 'Contact and Support'}</h2>
          <p>
            {isArabic ? 'إذا كانت لديك أي أسئلة حول أي من هذه الشروط أو الاستفسارات المتعلقة بحماية بياناتك، يرجى التواصل معنا عبر البريد الإلكتروني:' : 'If you have a question about any of these Terms or concerns regarding your data protection, please contact us at:'} <br />
            <a href="mailto:info@sndry.net" style={{display: 'inline-block', marginTop: '10px'}}>info@sndry.net</a>
          </p>
        </section>
      </div>
    </div>
  );
}
