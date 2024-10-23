<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('uz', array (
  'validators' => 
  array (
    'This value should be false.' => 'Qiymat false bo\'lishi kerak.',
    'This value should be true.' => 'Qiymat true bo\'lishi kerak.',
    'This value should be of type {{ type }}.' => 'Qiymat turi {{ type }} bo\'lishi kerak.',
    'This value should be blank.' => 'Qiymat bo\'sh bo\'lishi kerak.',
    'The value you selected is not a valid choice.' => 'Tanlangan qiymat yaroqli emas.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Siz hech bo\'lmaganda {{ limit }} ta qiymat tanlashingiz kerak.|Siz kamida {{ limit }} ta qiymat tanlashingiz kerak.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Siz {{ limit }} ta qiymatni tanlashingiz kerak.|Siz {{ limit }} dan ortiq qiymat tanlashingiz kerak.',
    'One or more of the given values is invalid.' => 'Belgilangan qiymatlarning bir yoki bir nechtasi yaroqsiz.',
    'This field was not expected.' => 'Ushbu maydon kutilmagan edi.',
    'This field is missing.' => 'Bu maydon majvud emas.',
    'This value is not a valid date.' => 'Ushbu sana noto\'g\'ri.',
    'This value is not a valid datetime.' => 'Sana va vaqt qiymati noto\'g\'ri.',
    'This value is not a valid email address.' => 'Elektron pochta manzili noto\'g\'ri.',
    'The file could not be found.' => 'Fayl topilmadi.',
    'The file is not readable.' => 'Faylni o\'qib bo\'lmadi.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fayl hajmi katta ({{ size }} {{ suffix }}). Maksimal ruxsat etilgan hajim {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Faylning MIME turi noto\'g\'ri ({{ type }}). Ruxsat etilgan MIME turlar {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Qiymat {{ limit }} ga teng yoki kam bo\'lishi kerak.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Qiymat juda uzun. {{ limit }} ga teng yoki kam bo\'lishi kerak.|Qiymat juda uzun. {{ limit }} yoki undan kam belgidan iborat bo\'lishi kerak.',
    'This value should be {{ limit }} or more.' => 'Qiymat {{ limit }} yoki undan ortiq bo\'lishi kerak.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Qiymat juda qisqa. {{ limit }} ta yoki undan ortiq belgidan iborat bo\'lishi kerak.|Qiymat juda qisqa. {{ limit }} yoki undan ko\'p belgidan iborat bo\'lishi kerak',
    'This value should not be blank.' => 'Qiymatni bo\'sh kirtish mumkin emas.',
    'This value should not be null.' => 'Qiymat null bo\'lmasligi kerak.',
    'This value should be null.' => 'Qiymat null bo\'lishi kerak.',
    'This value is not valid.' => 'Qiymat noto\'g\'ri.',
    'This value is not a valid time.' => 'Vaqt noto\'g\'ri.',
    'This value is not a valid URL.' => 'URL noto\'g\'ri',
    'The two values should be equal.' => 'Ikkala qiymat ham bir xil bo\'lishi kerak.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fayl hajmi katta. Maksimal ruxsat berilgan hajim {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fayl hajmi katta.',
    'The file could not be uploaded.' => 'Faylni yuklab bo\'lmadi.',
    'This value should be a valid number.' => 'Qiymat raqam bo\'lishi kerak.',
    'This file is not a valid image.' => 'Fayl yaroqli rasm formati emas.',
    'This is not a valid IP address.' => 'Bu qiymat haqiqiy IP manzil emas.',
    'This value is not a valid language.' => 'Noto\'g\'ri til.',
    'This value is not a valid locale.' => 'Ushbu qiymat mahalliy qiymat emas.',
    'This value is not a valid country.' => 'Mamlakat qiymati noto\'g\'ri.',
    'This value is already used.' => 'Ushbu qiymat allaqachon ishlatilgan.',
    'The size of the image could not be detected.' => 'Rasm o\'lchamini aniqlab bo\'lmadi.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Rasm kengligi juda katta ({{ width }}px). Maksimal ruxsat etilgan kenglik {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Rasm kengligi juda kichkina ({{ width }}px). Minimal ruxsat etilgan kenglik {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Rasm bo\'yi juda katta ({{ height }}px). Maksimal ruxsat etilgan balandlik {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Rasm bo\'yi juda kichkina ({{ height }}px). Minimal ruxsat etilgan balandlik {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Qiymat joriy foydalanuvchi paroli bo\'lishi kerak.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Qiymat {{ limit }} ta belgidan iborat bo\'lishi kerak.|Qiymat {{ limit }} belgidan iborat bo\'lishi kerak.',
    'The file was only partially uploaded.' => 'Fayl faqat qisman yuklangan.',
    'No file was uploaded.' => 'Fayl yuklanmagan.',
    'No temporary folder was configured in php.ini.' => 'php.ini da vaqtinchalik katalog sozlanmagan, yoki sozlangan katalog mavjud emas.',
    'Cannot write temporary file to disk.' => 'Diskka vaqtinchalik faylni yozib bo\'lmadi.',
    'A PHP extension caused the upload to fail.' => 'PHP kengaytmasi yuklash paytida xatolik yuz berdi.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ushbu to\'plam {{ limit }} ta yoki undan ko\'p narsalarni o\'z ichiga olishi kerak.|Ushbu to\'plam {{ limit }} yoki undan ortiq narsalarni o\'z ichiga olishi kerak.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ushbu to\'plam {{ limit }} ta yoki undan kam narsalarni o\'z ichiga olishi kerak.|Ushbu to\'plamda {{ limit }} yoki undan kam element bo\'lishi kerak.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ushbu to\'plam to\'liq {{ limit }} narsani o\'z ichiga olishi kerak.|Ushbu to\'plamda to\'liq {{ limit }} ta ma\'lumotlar bo\'lishi kerak.',
    'Invalid card number.' => 'Kata raqami noto\'g\'ri.',
    'Unsupported card type or invalid card number.' => 'Qo\'llab-quvvatlanmaydigan karta turi yoki yaroqsiz karta raqami.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Bu qiymat haqiqiy Xalqaro Bank Hisob Raqami (IBAN) emas.',
    'This value is not a valid ISBN-10.' => 'Qiymat to\'g\'ri ISBN-10 formatida emas.',
    'This value is not a valid ISBN-13.' => 'Qiymat to\'g\'ri ISBN-13 formatida emas.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Qiymat ISBN-10 va ISBN-13 formatlariga mos kelmaydi.',
    'This value is not a valid ISSN.' => 'Qiymat ISSN formatiga mos kelmaydi.',
    'This value is not a valid currency.' => 'Noto\'g\'ri valyuta formati.',
    'This value should be equal to {{ compared_value }}.' => 'Qiymat {{ compared_value }} ga teng bo\'lishi shart.',
    'This value should be greater than {{ compared_value }}.' => 'Qiymat {{ compared_value }} dan katta bo\'lishi shart.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Qiymat {{ compared_value }} dan katta yoki teng bo\'lishi shart.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значение должно быть идентичным {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Qiymat bir xil bo\'lishi kerak {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Qiymat {{ compared_value }} dan kichik yoki teng bo\'lishi shart.',
    'This value should not be equal to {{ compared_value }}.' => 'Qiymat {{ compared_value }} ga teng bo\'lmasligi kerak.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Qiymat bir xil bo\'lishi kerak emas {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Rasmning tomonlari nisbati juda katta ({{ ratio }}). Maksimal tomonlar nisbati {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Rasmning format nisbati juda kichik ({{ ratio }}). Minimal tomonlar nisbati {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Rasm kvadrat shaklida ({{ width }}x{{ height }}px). Kvadrat shaklida tasvirlarga ruxsat berilmaydi.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Landshaft tasvir ({{ width }}x{{ height }}px). Landshaft rasmlarga ruxsat berilmaydi.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Portret rasm ({{ width }}x{{ height }}px). Portretlarga ruxsat berilmaydi.',
    'An empty file is not allowed.' => 'Bo\'sh fayllarga ruxsat berilmagan.',
    'The host could not be resolved.' => 'Xost nomini nomiga ruxsat berilmagan.',
    'This value does not match the expected {{ charset }} charset.' => 'Qiymat kutilgan {{ charset }} kodlashiga mos kelmaydi.',
    'This is not a valid Business Identifier Code (BIC).' => 'Bu qiymat haqiqiy Biznes Identifikatsiya Kodi (BIC) emas.',
    'Error' => 'Xatolik',
    'This is not a valid UUID.' => 'Bu qiymat haqiqiy UUID emas.',
    'This value should be a multiple of {{ compared_value }}.' => 'Qiymat {{ compared_value }} ning ko\'paytmasi bo\'lishi kerak.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ushbu BIC IBAN {{ iban }} bilan bog\'liq emas..',
    'This value should be valid JSON.' => 'Qiymat to\'g\'ri JSON bo\'lishi kerak.',
    'This collection should contain only unique elements.' => 'Ushbu kolleksiyada takroriy elementlar bo\'lmasligi kerak.',
    'This value should be positive.' => 'Qiymat musbat bo\'lishi kerak.',
    'This value should be either positive or zero.' => 'Qiymat musbat yoki 0 ga teng bo\'lishi kerak.',
    'This value should be negative.' => 'Qiymat manfiy bo\'lishi kerak.',
    'This value should be either negative or zero.' => 'Qiymat manfiy yoki 0 ga teng bo\'lishi kerak.',
    'This value is not a valid timezone.' => 'Qiymat to\'g\'ri vaqt zonasi emas.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ushbu parol ma\'lumotlarning tarqalishi tufayli buzilgan va uni ishlatmaslik kerak. Boshqa paroldan foydalaning.',
    'This value should be between {{ min }} and {{ max }}.' => 'Qiymat {{ min }} va {{ max }} oralig\'ida bo\'lishi shart.',
    'This value is not a valid hostname.' => 'Qiymat to\'g\'ri xost nomi emas.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Ushbu to\'plamdagi narsalar soni {{ compared_value }} dan ko\'p bo\'lishi kerak.',
    'This value should satisfy at least one of the following constraints:' => 'Qiymat quyidagi cheklovlardan kamida bittasiga javob berishi kerak:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Ushbu to\'plamdagi har bir narsa o\'ziga xos cheklovlarni qondirishi kerak.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Qiymat Qimmatli qog\'ozlarning xalqaro identifikatsiya raqami (ISIN) ga mos emas.',
    'This value should be a valid expression.' => 'Ushbu qiymat to\'g\'ri ifoda bo\'lishi kerak.',
    'This value is not a valid CSS color.' => 'Bu qiymat haqiqiy CSS rangi emas.',
    'This value is not a valid CIDR notation.' => 'Qiymat CIDR belgisiga mos kelmaydi.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Tarmoq niqobining qiymati {{ min }} va {{ max }} oralig\'ida bo\'lishi kerak.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'Fayl nomi juda uzun. U {{ filename_max_length }} belgidan iborat boʻlishi kerak.|Fayl nomi juda uzun. U {{ filename_max_length }} ta belgidan iborat boʻlishi kerak.',
    'The password strength is too low. Please use a stronger password.' => 'Parol kuchi juda past. Iltimos, kuchliroq paroldan foydalaning.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'Bu qiymat joriy cheklov darajasida ruxsat etilmagan belgilarni o\'z ichiga oladi.',
    'Using invisible characters is not allowed.' => 'Ko\'rinmas belgilardan foydalanish taqiqlangan.',
    'Mixing numbers from different scripts is not allowed.' => 'Turli skriptlardagi raqamlarni aralashtirish taqiqlangan.',
    'Using hidden overlay characters is not allowed.' => 'Yashirin qoplamali belgilardan foydalanish taqiqlangan.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'Fayl kengaytmasi yaroqsiz ({{ extension }}). Ruxsat berilgan kengaytmalar {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'Aniqlangan belgi kodlamasi yaroqsiz ({{ detected }}). Ruxsat etilgan kodlamalar {{ encodings }}.',
    'This value is not a valid MAC address.' => 'Bu qiymat haqiqiy MAC manzil emas.',
    'This URL is missing a top-level domain.' => 'Bu URL yuqori darajali domenni o\'z ichiga olmaydi.',
    'This form should not contain extra fields.' => 'Ushbu fo\'rmada qo\'shimcha maydonlar bo\'lmasligi kerak.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Yuklab olingan fayl juda katta. Iltimos, kichikroq faylni yuklashga harakat qiling.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF qiymati yaroqsiz. Fo\'rmani qayta yuborishga harakat qiling.',
    'This value is not a valid HTML5 color.' => 'Qiymat noto\'g\'ri, HTML5 rangi emas.',
    'Please enter a valid birthdate.' => 'Iltimos, tug\'ilgan kuningizni to\'g\'ri kiriting.',
    'The selected choice is invalid.' => 'Tanlangan parametr noto\'g\'ri.',
    'The collection is invalid.' => 'Kolleksiya noto\'g\'ri',
    'Please select a valid color.' => 'Iltimos, to\'g\'ri rang tanlang.',
    'Please select a valid country.' => 'Iltimos, to\'g\'ri mamlakatni tanlang.',
    'Please select a valid currency.' => 'Iltimos, to\'g\'ri valyutani tanlang.',
    'Please choose a valid date interval.' => 'Iltimos, to\'g\'ri sana oralig\'ini tanlang.',
    'Please enter a valid date and time.' => 'Iltimos, to\'g\'ri sana va vaqtni kiriting.',
    'Please enter a valid date.' => 'Iltimos, to\'g\'ri sanani kiriting.',
    'Please select a valid file.' => 'Iltimos, to\'g\'ri faylni tanlang.',
    'The hidden field is invalid.' => 'Yashirin maydon qiymati yaroqsiz.',
    'Please enter an integer.' => 'Iltimos, butun son kiriting.',
    'Please select a valid language.' => 'Iltimos, to\'g\'ri tilni tanlang.',
    'Please select a valid locale.' => 'Iltimos, to\'g\'ri localni tanlang.',
    'Please enter a valid money amount.' => 'Iltimos, tegishli miqdordagi pulni kiriting.',
    'Please enter a number.' => 'Iltimos, raqam kiriting.',
    'The password is invalid.' => 'Parol noto\'g\'ri.',
    'Please enter a percentage value.' => 'Iltimos, foyizli qiymat kiriting.',
    'The values do not match.' => 'Qiymatlar mos kelmaydi.',
    'Please enter a valid time.' => 'Iltimos, to\'g\'ri vaqtni tanlang.',
    'Please select a valid timezone.' => 'Iltimos, to\'g\'ri vaqt zonasini tanlang.',
    'Please enter a valid URL.' => 'Iltimos, to\'g\'ri URL kiriting.',
    'Please enter a valid search term.' => 'Iltimos, to\'g\'ri qidiruv so\'zini kiriting.',
    'Please provide a valid phone number.' => 'Iltimos, to\'g\'ri telefon raqamini kiriting.',
    'The checkbox has an invalid value.' => 'Belgilash katagida yaroqsiz qiymat mavjud.',
    'Please enter a valid email address.' => 'Iltimos, to\'g\'ri email kiriting.',
    'Please select a valid option.' => 'Iltimos, yaroqli variantni tanlang.',
    'Please select a valid range.' => 'Iltimos, yaroqli oraliqni tanlang.',
    'Please enter a valid week.' => 'Iltimos, haqiqiy haftani kiriting.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Autentifikatsiyada xatolik.',
    'Authentication credentials could not be found.' => 'Autentifikatsiya ma\'lumotlari topilmadi.',
    'Authentication request could not be processed due to a system problem.' => 'Tizimdagi muammo tufayli autentifikatsiya so\'rovi bajarilmadi.',
    'Invalid credentials.' => 'Noto\'g\'ri ma\'lumot.',
    'Cookie has already been used by someone else.' => 'Cookie faylini allaqachon kimdir ishlatgan.',
    'Not privileged to request the resource.' => 'Sizda ushbu manbani talab qilishga ruxsat yo\'q..',
    'Invalid CSRF token.' => 'Noto\'g\'ri CSRF belgisi.',
    'No authentication provider found to support the authentication token.' => 'Haqiqiylikni tasdiqlovchi belgini qo\'llab-quvvatlovchi biron bir autentifikatsiya provayderi topilmadi.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sessiya topilmadi, muddati tugamadi yoki cookie-fayllar yoqilmagan.',
    'No token could be found.' => 'To\'ken topilmadi.',
    'Username could not be found.' => 'Foydalanuvchi nomi topilmadi.',
    'Account has expired.' => 'Akkunt muddati tugagan.',
    'Credentials have expired.' => 'Autentifikatsiya ma\'lumotlari muddati tugagan.',
    'Account is disabled.' => 'Akkunt o\'chirilgan.',
    'Account is locked.' => 'Akkunt bloklangan.',
    'Too many failed login attempts, please try again later.' => 'Kirish urinishlari muvaffaqiyatsiz tugadi, keyinroq qayta urinib ko\'ring.',
    'Invalid or expired login link.' => 'Kirish havolasi yaroqsiz yoki muddati tugagan.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Kirish uchun muvaffaqiyatsiz urinishlar, %minutes% daqiqadan so\'ng qayta urinib ko\'ring.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Koʻplab muvaffaqiyatsiz kirish urinishlari, iltimos, %minutes% daqiqadan so\'ng qayta urinib koʻring.|Koʻplab muvaffaqiyatsiz kirish urinishlari, iltimos, %minutes% daqiqadan so\'ng qayta urinib koʻring.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This value is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This value is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This value is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This value is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.',
    'The password strength is too low. Please use a stronger password.' => 'The password strength is too low. Please use a stronger password.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'This value contains characters that are not allowed by the current restriction-level.',
    'Using invisible characters is not allowed.' => 'Using invisible characters is not allowed.',
    'Mixing numbers from different scripts is not allowed.' => 'Mixing numbers from different scripts is not allowed.',
    'Using hidden overlay characters is not allowed.' => 'Using hidden overlay characters is not allowed.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.',
    'This value is not a valid MAC address.' => 'This value is not a valid MAC address.',
    'This URL is missing a top-level domain.' => 'This URL is missing a top-level domain.',
    'This value is too short. It should contain at least one word.|This value is too short. It should contain at least {{ min }} words.' => 'This value is too short. It should contain at least one word.|This value is too short. It should contain at least {{ min }} words.',
    'This value is too long. It should contain one word.|This value is too long. It should contain {{ max }} words or less.' => 'This value is too long. It should contain one word.|This value is too long. It should contain {{ max }} words or less.',
    'This value does not represent a valid week in the ISO 8601 format.' => 'This value does not represent a valid week in the ISO 8601 format.',
    'This value is not a valid week.' => 'This value is not a valid week.',
    'This value should not be before week "{{ min }}".' => 'This value should not be before week "{{ min }}".',
    'This value should not be after week "{{ max }}".' => 'This value should not be after week "{{ max }}".',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Too many failed login attempts, please try again in %minutes% minutes.',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Delete?',
    'vich_uploader.link.download' => 'Download',
  ),
  'VerifyEmailBundle' => 
  array (
    '%count% year|%count% years' => '%count% year|%count% years',
    '%count% month|%count% months' => '%count% month|%count% months',
    '%count% day|%count% days' => '%count% day|%count% days',
    '%count% hour|%count% hours' => '%count% hour|%count% hours',
    '%count% minute|%count% minutes' => '%count% minute|%count% minutes',
    'The link to verify your email has expired. Please request a new link.' => 'The link to verify your email has expired. Please request a new link.',
    'The link to verify your email is invalid. Please request a new link.' => 'The link to verify your email is invalid. Please request a new link.',
    'The link to verify your email appears to be for a different account or email. Please request a new link.' => 'The link to verify your email appears to be for a different account or email. Please request a new link.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
    'filter_searchword' => 'Searchword...',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
