<?php

use Illuminate\Support\Facades\Route;


// Front Controller Route
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Front\PortfolioController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\PostController;
use App\Http\Controllers\Front\CommentController;



// Admin Controller Route

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminHomePageController;
use App\Http\Controllers\Admin\AdminSkillController;
use App\Http\Controllers\Admin\AdminEducationController;
use App\Http\Controllers\Admin\AdminExperienceController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\Admin\AdminClientController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminPortfolioCategoryController;
use App\Http\Controllers\Admin\AdminPortfolioController;
use App\Http\Controllers\Admin\AdminPostCategoryController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminSettingController;



// Route::get('/', function () {
//     return view('welcome');
// });



/* Front route */

// home page route

Route::get('/', [HomeController::class, 'index'])->name('home');

// about page route

Route::get('/about', [AboutController::class, 'index'])->name('about');

// Service page route

Route::get('/services', [ServiceController::class, 'index'])->name('service');

// Service detail page route

Route::get('/service/{slug}', [ServiceController::class, 'detail'])->name('service_detail');

// Portfolio page route

Route::get('/portfolios', [PortfolioController::class, 'index'])->name('portfolio');

// Portfolio detail page route

Route::get('/portfolio/{slug}', [PortfolioController::class, 'detail'])->name('portfolio_detail');

// Contact page route

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send-email', [ContactController::class, 'send_email'])->name('contact_send_email');

// Post page route

Route::get('/posts', [PostController::class, 'index'])->name('blog');

// Post detail page route

Route::get('/post/{slug}', [PostController::class, 'detail'])->name('post');
Route::get('/category/{slug}', [PostController::class, 'category'])->name('category');

// Archive detail page route

Route::get('/archive/{month}/{year}', [PostController::class, 'archive'])->name('archive');

// Search page route

Route::post('/search', [PostController::class, 'search'])->name('search');

// Comment page route Submit

Route::post('/comment-submit', [CommentController::class, 'comment_submit'])->name('comment_submit');

// Reply page route Submit

Route::post('/reply-submit', [CommentController::class, 'reply_submit'])->name('reply_submit');

// Admin Comment page route Submit

Route::post('/admin/comment-submit', [CommentController::class, 'admin_comment_submit'])->name('admin_comment_submit');

// Admin Reply page route Submit

Route::post('/admin/reply-submit', [CommentController::class, 'admin_reply_submit'])->name('admin_reply_submit');


/* Admin route */

// Admin login route

Route::get('admin/home', [AdminHomeController::class, 'index'])->name('admin_home')->middleware('admin:admin');
Route::get('admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('admin/logout', [AdminLoginController::class, 'admin_logout'])->name('admin_logout');
Route::get('admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
Route::post('admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
Route::get('admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
Route::post('admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');

// Admin profile route

Route::get('admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin_profile')->middleware('admin:admin');
Route::post('admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit')->middleware('admin:admin');

/* Admin route Home Page*/

// Admin Banner route

Route::get('admin/home-banner', [AdminHomePageController::class, 'banner'])->name('admin_home_banner')->middleware('admin:admin');
Route::post('admin/home-banner-update', [AdminHomePageController::class, 'banner_update'])->name('admin_home_banner_update')->middleware('admin:admin');

// Admin About route

Route::get('admin/home-about', [AdminHomePageController::class, 'about'])->name('admin_home_about')->middleware('admin:admin');
Route::post('admin/home-about-update', [AdminHomePageController::class, 'about_update'])->name('admin_home_about_update')->middleware('admin:admin');

// Admin skill route

Route::get('admin/home-skill', [AdminHomePageController::class, 'skill'])->name('admin_home_skill')->middleware('admin:admin');
Route::post('admin/home-skill-update', [AdminHomePageController::class, 'skill_update'])->name('admin_home_skill_update')->middleware('admin:admin');

// Admin skill create route

Route::get('admin/skill-show', [AdminSkillController::class, 'index'])->name('admin_skill_show')->middleware('admin:admin');
Route::get('admin/skill-create', [AdminSkillController::class, 'skill_create'])->name('admin_skill_create')->middleware('admin:admin');
Route::post('admin/skill-submit', [AdminSkillController::class, 'skill_store'])->name('admin_skill_submit')->middleware('admin:admin');
Route::get('admin/skill-edit/{id}', [AdminSkillController::class, 'skill_edit'])->name('admin_skill_edit')->middleware('admin:admin');
Route::post('admin/skill-update/{id}', [AdminSkillController::class, 'skill_update'])->name('admin_skill_update')->middleware('admin:admin');
Route::get('admin/skill-delete/{id}', [AdminSkillController::class, 'skill_delete'])->name('admin_skill_delete')->middleware('admin:admin');

//Qualification Route

Route::get('admin/home-qualification', [AdminHomePageController::class, 'qualification'])->name('admin_home_qualification')->middleware('admin:admin');
Route::post('admin/home-qualification-update', [AdminHomePageController::class, 'qualification_update'])->name('admin_home_qualification_update')->middleware('admin:admin');

// Admin Education create route

Route::get('admin/education-show', [AdminEducationController::class, 'index'])->name('admin_education_show')->middleware('admin:admin');
Route::get('admin/education-create', [AdminEducationController::class, 'education_create'])->name('admin_education_create')->middleware('admin:admin');
Route::post('admin/education-submit', [AdminEducationController::class, 'education_store'])->name('admin_education_submit')->middleware('admin:admin');
Route::get('admin/education-edit/{id}', [AdminEducationController::class, 'education_edit'])->name('admin_education_edit')->middleware('admin:admin');
Route::post('admin/education-update/{id}', [AdminEducationController::class, 'education_update'])->name('admin_education_update')->middleware('admin:admin');
Route::get('admin/education-delete/{id}', [AdminEducationController::class, 'education_delete'])->name('admin_education_delete')->middleware('admin:admin');

// Admin Experience create route

Route::get('admin/experience-show', [AdminExperienceController::class, 'index'])->name('admin_experience_show')->middleware('admin:admin');
Route::get('admin/experience-create', [AdminExperienceController::class, 'experience_create'])->name('admin_experience_create')->middleware('admin:admin');
Route::post('admin/experience-submit', [AdminExperienceController::class, 'experience_store'])->name('admin_experience_submit')->middleware('admin:admin');
Route::get('admin/experience-edit/{id}', [AdminExperienceController::class, 'experience_edit'])->name('admin_experience_edit')->middleware('admin:admin');
Route::post('admin/experience-update/{id}', [AdminExperienceController::class, 'experience_update'])->name('admin_experience_update')->middleware('admin:admin');
Route::get('admin/experience-delete/{id}', [AdminExperienceController::class, 'experience_delete'])->name('admin_experience_delete')->middleware('admin:admin');

//Counter Route

Route::get('admin/home-counter', [AdminHomePageController::class, 'counter'])->name('admin_home_counter')->middleware('admin:admin');
Route::post('admin/home-counter-update', [AdminHomePageController::class, 'counter_update'])->name('admin_home_counter_update')->middleware('admin:admin');

//Testimonials Route

Route::get('admin/home-testimonials', [AdminHomePageController::class, 'testimonials'])->name('admin_home_testimonials')->middleware('admin:admin');
Route::post('admin/home-testimonials-update', [AdminHomePageController::class, 'testimonials_update'])->name('admin_home_testimonials_update')->middleware('admin:admin');

// Admin Testimonial create route

Route::get('admin/testimonial-show', [AdminTestimonialController::class, 'index'])->name('admin_testimonial_show')->middleware('admin:admin');
Route::get('admin/testimonial-create', [AdminTestimonialController::class, 'testimonial_create'])->name('admin_testimonial_create')->middleware('admin:admin');
Route::post('admin/testimonial-submit', [AdminTestimonialController::class, 'testimonial_store'])->name('admin_testimonial_submit')->middleware('admin:admin');
Route::get('admin/testimonial-edit/{id}', [AdminTestimonialController::class, 'testimonial_edit'])->name('admin_testimonial_edit')->middleware('admin:admin');
Route::post('admin/testimonial-update/{id}', [AdminTestimonialController::class, 'testimonial_update'])->name('admin_testimonial_update')->middleware('admin:admin');
Route::get('admin/testimonial-delete/{id}', [AdminTestimonialController::class, 'testimonial_delete'])->name('admin_testimonial_delete')->middleware('admin:admin');

//Client Route

Route::get('admin/home-client', [AdminHomePageController::class, 'client'])->name('admin_home_client')->middleware('admin:admin');
Route::post('admin/home-client-update', [AdminHomePageController::class, 'client_update'])->name('admin_home_client_update')->middleware('admin:admin');

// Admin Client create route

Route::get('admin/client-show', [AdminClientController::class, 'index'])->name('admin_client_show')->middleware('admin:admin');
Route::get('admin/client-create', [AdminClientController::class, 'client_create'])->name('admin_client_create')->middleware('admin:admin');
Route::post('admin/client-submit', [AdminClientController::class, 'client_store'])->name('admin_client_submit')->middleware('admin:admin');
Route::get('admin/client-edit/{id}', [AdminClientController::class, 'client_edit'])->name('admin_client_edit')->middleware('admin:admin');
Route::post('admin/client-update/{id}', [AdminClientController::class, 'client_update'])->name('admin_client_update')->middleware('admin:admin');
Route::get('admin/client-delete/{id}', [AdminClientController::class, 'client_delete'])->name('admin_client_delete')->middleware('admin:admin');

//Service Route

Route::get('admin/home-service', [AdminHomePageController::class, 'service'])->name('admin_home_service')->middleware('admin:admin');
Route::post('admin/home-service-update', [AdminHomePageController::class, 'service_update'])->name('admin_home_service_update')->middleware('admin:admin');

// Admin Service create route

Route::get('admin/service-show', [AdminServiceController::class, 'index'])->name('admin_service_show')->middleware('admin:admin');
Route::get('admin/service-create', [AdminServiceController::class, 'service_create'])->name('admin_service_create')->middleware('admin:admin');
Route::post('admin/service-submit', [AdminServiceController::class, 'service_store'])->name('admin_service_submit')->middleware('admin:admin');
Route::get('admin/service-edit/{id}', [AdminServiceController::class, 'service_edit'])->name('admin_service_edit')->middleware('admin:admin');
Route::post('admin/service-update/{id}', [AdminServiceController::class, 'service_update'])->name('admin_service_update')->middleware('admin:admin');
Route::get('admin/service-delete/{id}', [AdminServiceController::class, 'service_delete'])->name('admin_service_delete')->middleware('admin:admin');

//Service Page Route

Route::get('admin/page-service', [AdminPageController::class, 'services'])->name('admin_page_service')->middleware('admin:admin');
Route::post('admin/page-service-update', [AdminPageController::class, 'services_update'])->name('admin_page_service_update')->middleware('admin:admin');

//Portfolio Route

Route::get('admin/home-portfolio', [AdminHomePageController::class, 'portfolio'])->name('admin_home_portfolio')->middleware('admin:admin');
Route::post('admin/home-portfolio-update', [AdminHomePageController::class, 'portfolio_update'])->name('admin_home_portfolio_update')->middleware('admin:admin');

// Admin portfolio category route

Route::get('admin/portfolio-category-show', [AdminPortfolioCategoryController::class, 'index'])->name('admin_portfolio_category_show')->middleware('admin:admin');
Route::get('admin/portfolio-category-create', [AdminPortfolioCategoryController::class, 'portfolio_category_create'])->name('admin_portfolio_category_create')->middleware('admin:admin');
Route::post('admin/portfolio-category-submit', [AdminPortfolioCategoryController::class, 'portfolio_category_store'])->name('admin_portfolio_category_submit')->middleware('admin:admin');
Route::get('admin/portfolio-category-edit/{id}', [AdminPortfolioCategoryController::class, 'portfolio_category_edit'])->name('admin_portfolio_category_edit')->middleware('admin:admin');
Route::post('admin/portfolio-category-update/{id}', [AdminPortfolioCategoryController::class, 'portfolio_category_update'])->name('admin_portfolio_category_update')->middleware('admin:admin');
Route::get('admin/portfolio-category-delete/{id}', [AdminPortfolioCategoryController::class, 'portfolio_category_delete'])->name('admin_portfolio_category_delete')->middleware('admin:admin');

// Admin portfolio route

Route::get('admin/portfolio-show', [AdminPortfolioController::class, 'index'])->name('admin_portfolio_show')->middleware('admin:admin');
Route::get('admin/portfolio-create', [AdminPortfolioController::class, 'portfolio_create'])->name('admin_portfolio_create')->middleware('admin:admin');
Route::post('admin/portfolio-submit', [AdminPortfolioController::class, 'portfolio_store'])->name('admin_portfolio_submit')->middleware('admin:admin');
Route::get('admin/portfolio-edit/{id}', [AdminPortfolioController::class, 'portfolio_edit'])->name('admin_portfolio_edit')->middleware('admin:admin');
Route::post('admin/portfolio-update/{id}', [AdminPortfolioController::class, 'portfolio_update'])->name('admin_portfolio_update')->middleware('admin:admin');
Route::get('admin/portfolio-delete/{id}', [AdminPortfolioController::class, 'portfolio_delete'])->name('admin_portfolio_delete')->middleware('admin:admin');

// Admin portfolio photo gallery route

Route::get('admin/portfolio/photo-gallery/show/{id}', [AdminPortfolioController::class, 'photo_gallery'])->name('admin_portfolio_photo_gallery_show')->middleware('admin:admin');
Route::post('admin/portfolio_photo_gallery-submit', [AdminPortfolioController::class, 'photo_gallery_submit'])->name('admin_portfolio_photo_gallery_submit')->middleware('admin:admin');
Route::get('admin/portfolio-photo-delete/{id}', [AdminPortfolioController::class, 'photo_gallery_delete'])->name('admin_portfolio_photo_gallery_delete')->middleware('admin:admin');

// Admin portfolio Video gallery route

Route::get('admin/portfolio/video-gallery/show/{id}', [AdminPortfolioController::class, 'video_gallery'])->name('admin_portfolio_video_gallery_show')->middleware('admin:admin');
Route::post('admin/portfolio_video_gallery-submit', [AdminPortfolioController::class, 'video_gallery_submit'])->name('admin_portfolio_video_gallery_submit')->middleware('admin:admin');
Route::get('admin/portfolio-video-delete/{id}', [AdminPortfolioController::class, 'video_gallery_delete'])->name('admin_portfolio_video_gallery_delete')->middleware('admin:admin');

//portfolio Page Route

Route::get('admin/page-portfolio', [AdminPageController::class, 'portfolios'])->name('admin_page_portfolio')->middleware('admin:admin');
Route::post('admin/page-portfolio-update', [AdminPageController::class, 'portfolios_update'])->name('admin_page_portfolio_update')->middleware('admin:admin');

// Admin SEO && SEO Meta Description route

Route::get('admin/home-seo', [AdminHomePageController::class, 'seo'])->name('admin_home_seo')->middleware('admin:admin');
Route::post('admin/home-seo-update', [AdminHomePageController::class, 'seo_update'])->name('admin_home_seo_update')->middleware('admin:admin');

//About Page Route

Route::get('admin/page-about', [AdminPageController::class, 'about'])->name('admin_page_about')->middleware('admin:admin');
Route::post('admin/page-about-update', [AdminPageController::class, 'about_update'])->name('admin_page_about_update')->middleware('admin:admin');
Route::get('admin/page-about/photo-delete', [AdminPageController::class, 'about_photo_delete'])->name('admin_page_about_delete')->middleware('admin:admin');

//Contact Page Route

Route::get('admin/page-contact', [AdminPageController::class, 'contact'])->name('admin_page_contact')->middleware('admin:admin');
Route::post('admin/page-contact-update', [AdminPageController::class, 'contact_update'])->name('admin_page_contact_update')->middleware('admin:admin');

//Blog Route

Route::get('admin/home-blog', [AdminHomePageController::class, 'blog'])->name('admin_home_blog')->middleware('admin:admin');
Route::post('admin/home-blog-update', [AdminHomePageController::class, 'blog_update'])->name('admin_home_blog_update')->middleware('admin:admin');

// Admin Post category route

Route::get('admin/post-category-show', [AdminPostCategoryController::class, 'index'])->name('admin_post_category_show')->middleware('admin:admin');
Route::get('admin/post-category-create', [AdminPostCategoryController::class, 'post_category_create'])->name('admin_post_category_create')->middleware('admin:admin');
Route::post('admin/post-category-submit', [AdminPostCategoryController::class, 'post_category_store'])->name('admin_post_category_submit')->middleware('admin:admin');
Route::get('admin/post-category-edit/{id}', [AdminPostCategoryController::class, 'post_category_edit'])->name('admin_post_category_edit')->middleware('admin:admin');
Route::post('admin/post-category-update/{id}', [AdminPostCategoryController::class, 'post_category_update'])->name('admin_post_category_update')->middleware('admin:admin');
Route::get('admin/post-category-delete/{id}', [AdminPostCategoryController::class, 'post_category_delete'])->name('admin_post_category_delete')->middleware('admin:admin');

// Admin post route

Route::get('admin/post-show', [AdminPostController::class, 'index'])->name('admin_post_show')->middleware('admin:admin');
Route::get('admin/post-create', [AdminPostController::class, 'post_create'])->name('admin_post_create')->middleware('admin:admin');
Route::post('admin/post-submit', [AdminPostController::class, 'post_store'])->name('admin_post_submit')->middleware('admin:admin');
Route::get('admin/post-edit/{id}', [AdminPostController::class, 'post_edit'])->name('admin_post_edit')->middleware('admin:admin');
Route::post('admin/post-update/{id}', [AdminPostController::class, 'post_update'])->name('admin_post_update')->middleware('admin:admin');
Route::get('admin/post-delete/{id}', [AdminPostController::class, 'post_delete'])->name('admin_post_delete')->middleware('admin:admin');

// Admin post Comment route

Route::get('admin/comment-pending', [AdminPostController::class, 'comment_pending'])->name('admin_comment_pending')->middleware('admin:admin');
Route::get('admin/comment/make-approved/{id}', [AdminPostController::class, 'comment_make_approved'])->name('admin_comment_make_approved')->middleware('admin:admin');
Route::get('admin/comment-approved', [AdminPostController::class, 'comment_approved'])->name('admin_comment_approved')->middleware('admin:admin');
Route::get('admin/comment/make-pending/{id}', [AdminPostController::class, 'comment_make_pending'])->name('admin_comment_make_pending')->middleware('admin:admin');
Route::get('admin/comment-delete/{id}', [AdminPostController::class, 'comment_delete'])->name('admin_comment_delete')->middleware('admin:admin');

// Admin post Replies route

Route::get('admin/reply-pending', [AdminPostController::class, 'reply_pending'])->name('admin_reply_pending')->middleware('admin:admin');
Route::get('admin/reply/make-approved/{id}', [AdminPostController::class, 'reply_make_approved'])->name('admin_reply_make_approved')->middleware('admin:admin');
Route::get('admin/reply-approved', [AdminPostController::class, 'reply_approved'])->name('admin_reply_approved')->middleware('admin:admin');
Route::get('admin/reply/make-pending/{id}', [AdminPostController::class, 'reply_make_pending'])->name('admin_reply_make_pending')->middleware('admin:admin');
Route::get('admin/reply-delete/{id}', [AdminPostController::class, 'reply_delete'])->name('admin_reply_delete')->middleware('admin:admin');

//Blog Page Route

Route::get('admin/page-blog', [AdminPageController::class, 'blog'])->name('admin_page_blog')->middleware('admin:admin');
Route::post('admin/page-blog-update', [AdminPageController::class, 'blog_update'])->name('admin_page_blog_update')->middleware('admin:admin');

//Category Page Route

Route::get('admin/page-category', [AdminPageController::class, 'category'])->name('admin_page_category')->middleware('admin:admin');
Route::post('admin/page-category-update', [AdminPageController::class, 'category_update'])->name('admin_page_category_update')->middleware('admin:admin');

//Archive Page Route

Route::get('admin/page-archive', [AdminPageController::class, 'archive'])->name('admin_page_archive')->middleware('admin:admin');
Route::post('admin/page-archive-update', [AdminPageController::class, 'archive_update'])->name('admin_page_archive_update')->middleware('admin:admin');

//Search Page Route

Route::get('admin/page-search', [AdminPageController::class, 'search'])->name('admin_page_search')->middleware('admin:admin');
Route::post('admin/page-search-update', [AdminPageController::class, 'search_update'])->name('admin_page_search_update')->middleware('admin:admin');

// Admin Setting route

Route::get('admin/setting', [AdminSettingController::class, 'index'])->name('admin_setting')->middleware('admin:admin');
Route::post('admin/setting-update', [AdminSettingController::class, 'setting_update'])->name('admin_setting_update')->middleware('admin:admin');

