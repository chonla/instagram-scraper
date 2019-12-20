<?php

use PHPUnit\Framework\TestCase;
use InstagramScraper\TagScraper;
use InstagramScraper\Paginator;

class TagScraperTest extends TestCase {
    public function testCreateTagScraper() {
        $scraper = new TagScraper();
        $this->assertNotNull($scraper);
    }

    public function testParseWithSimpleData() {
        $content = 'window._sharedData = {"activity_counts":{"comment_likes":0,"comments":0,"likes":0,"relationships":0,"usertags":0},"config":{"csrf_token":"A1c74NuZYHUTTW5JfwWTNfXn9Z0wmh1x","viewer":{"allow_contacts_sync":false,"biography":"programmer, traveller, runner, hiker, photographer","external_url":"http://www.chonla.com/","full_name":"chonla","has_profile_pic":true,"id":"30727014","profile_pic_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e8640bd09eac350e0d612e5bca035eaa/5C1C46E0/t51.2885-19/11351647_537729729713576_2100710552_a.jpg","profile_pic_url_hd":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e8640bd09eac350e0d612e5bca035eaa/5C1C46E0/t51.2885-19/11351647_537729729713576_2100710552_a.jpg","username":"chonlagram"}},"supports_es6":true,"country_code":"TH","language_code":"en","locale":"en_US","entry_data":{"TagPage":[{"graphql":{"hashtag":{"id":"17841562705100603","name":"bhumibolbridge","is_following":false,"is_top_media_only":false,"profile_pic_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/5463a94d1b83e7401dbbb9fcbaadb3cb/5C168B37/t51.2885-15/e35/c0.134.1080.1080/s150x150/38905494_1917965828260543_2962362415771025408_n.jpg","edge_hashtag_to_media":{"count":2430,"page_info":{"has_next_page":true,"end_cursor":"AQBPr828ssCS2lLObcfWzK0qbDtjWAb6mku1VC9A52-I1uWLE7RkMrNk5jtkePmNROwwq-PlN3kCuPX_u-fZho9oUpT43rUHsKOnrrxepQr2GQ"},"edges":[{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852761236966709710","edge_media_to_caption":{"edges":[{"node":{"text":"เอเชียทีคหน้าตรง ความงามของฝั่งเจ้าพระยาฝั่งตะวันออก วัฒนธรรมความเจริญบริเวณเลียบฝั่งแม่น้ำ จึงเป็นจุดท่องเที่ยวที่นิยมของชาวต่างประเทศ #asiatique #bhumibolbridge #chaoprayariver"}}]},"shortcode":"Bm2VIdXA5nO","edge_media_to_comment":{"count":6},"taken_at_timestamp":1535086372,"dimensions":{"height":1080,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/6d3b23ae486c0a1f09b7137ef8f3f90e/5C0918BA/t51.2885-15/e35/39381489_420732498331428_3696641758545838080_n.jpg","edge_liked_by":{"count":16},"edge_media_preview_like":{"count":16},"owner":{"id":"198351430"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7943aac381804d1184302b6f221c5a6/5BFCE15F/t51.2885-15/sh0.08/e35/s640x640/39381489_420732498331428_3696641758545838080_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b9aa2baf11935a55065078559cfe9219/5C1B49F8/t51.2885-15/e35/s150x150/39381489_420732498331428_3696641758545838080_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d4a5fa0fedfb8a563f707ee55593df5c/5BFA99B2/t51.2885-15/e35/s240x240/39381489_420732498331428_3696641758545838080_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7bc642b4ccd10b33dc3fb1d4ba496da/5BFB1908/t51.2885-15/e35/s320x320/39381489_420732498331428_3696641758545838080_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e048c29d6193b840f8c5e605be1e9d8b/5C35A952/t51.2885-15/e35/s480x480/39381489_420732498331428_3696641758545838080_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7943aac381804d1184302b6f221c5a6/5BFCE15F/t51.2885-15/sh0.08/e35/s640x640/39381489_420732498331428_3696641758545838080_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852401231215447211","edge_media_to_caption":{"edges":[{"node":{"text":"บางทีท้องฟ้าก็ดูกว้างไป #ท้องฟ้ากับเสาไฟ #bhumibolbridge #bangkok #twilight"}}]},"shortcode":"Bm1DRr4F8yr","edge_media_to_comment":{"count":0},"taken_at_timestamp":1535043456,"dimensions":{"height":1080,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/58241dfa9418df02b7e95b2faada49eb/5C365682/t51.2885-15/e35/39334380_320104778564057_3376495330093694976_n.jpg","edge_liked_by":{"count":2},"edge_media_preview_like":{"count":2},"owner":{"id":"12002500"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/efc55008112f6ce3d89e40c7dd13eb5b/5C07EA67/t51.2885-15/sh0.08/e35/s640x640/39334380_320104778564057_3376495330093694976_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/a29772afeeaee0f99d92972696f32a59/5BFAFBC0/t51.2885-15/e35/s150x150/39334380_320104778564057_3376495330093694976_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/660db8ef0f9990827693b9afcff60707/5BFEAA8A/t51.2885-15/e35/s240x240/39334380_320104778564057_3376495330093694976_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/6d632993cc8102ad284e4f3696dbc31b/5C18AF30/t51.2885-15/e35/s320x320/39334380_320104778564057_3376495330093694976_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e7431c70b1221897f06ec6066f1ea5f0/5C37C96A/t51.2885-15/e35/s480x480/39334380_320104778564057_3376495330093694976_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/efc55008112f6ce3d89e40c7dd13eb5b/5C07EA67/t51.2885-15/sh0.08/e35/s640x640/39334380_320104778564057_3376495330093694976_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852139501503553293","edge_media_to_caption":{"edges":[{"node":{"text":"ที่นี่พระประแดง \nThere\'s no place like home.\n#phrapradaeng #pier #bridge #boat #bhumibolbridge #river #greenlung"}}]},"shortcode":"Bm0HxBFlp8N","edge_media_to_comment":{"count":0},"taken_at_timestamp":1535012255,"dimensions":{"height":500,"width":750},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/94f1baaa4a850e1f86fab8b7a26c2109/5C1C3D1D/t51.2885-15/e35/39337324_996624327181364_8478193634745778176_n.jpg","edge_liked_by":{"count":19},"edge_media_preview_like":{"count":19},"owner":{"id":"1423837820"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/f5bb75af927b8e255812410c06803cbb/5C1D6DE8/t51.2885-15/e35/c120.0.480.480/s150x150/39337324_996624327181364_8478193634745778176_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/4d4e6602ddb8bbd6e8f9578b8565df09/5C3AA5A2/t51.2885-15/e35/c120.0.480.480/s240x240/39337324_996624327181364_8478193634745778176_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/bcef364c65d75ff79dc018f3aefd228c/5C16CE18/t51.2885-15/e35/c120.0.480.480/s320x320/39337324_996624327181364_8478193634745778176_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852010750252525504","edge_media_to_caption":{"edges":[{"node":{"text":"หลังเบลอหน้าก็เบลอ ง่วงนอน\n#bhumibolbridge #watdan"}}]},"shortcode":"BmzqfcJAafA","edge_media_to_comment":{"count":2},"taken_at_timestamp":1534996907,"dimensions":{"height":1080,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/9ea4b508ea478ef3708fa9581f6bd948/5C1C8B6D/t51.2885-15/e35/39835919_2086052055056997_2157845299551272960_n.jpg","edge_liked_by":{"count":9},"edge_media_preview_like":{"count":9},"owner":{"id":"1393172596"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dc0b46d50e88f781eacb4636aa2a03cb/5BF6ACD7/t51.2885-15/sh0.08/e35/s640x640/39835919_2086052055056997_2157845299551272960_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/628f39cae12a0de00952ec4343415fd4/5C1C4852/t51.2885-15/e35/s150x150/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/f24bd0f90d8ecfd6d7fae519e6958fa1/5BFD9F54/t51.2885-15/e35/s240x240/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/c56ff3c4c2a62e32e23fc7f9269b47f1/5C375A2A/t51.2885-15/e35/s320x320/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/7bb1b53080b50b40c6a767acad0fc232/5C37C36D/t51.2885-15/e35/s480x480/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dc0b46d50e88f781eacb4636aa2a03cb/5BF6ACD7/t51.2885-15/sh0.08/e35/s640x640/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1850815771628156949","edge_media_to_caption":{"edges":[{"node":{"text":"Bhumibol Bridge and Klong Lad Pho Flood Gate at Dusk, Samutprakarn Province.\n-\n-\nView from Chao Praya River at Bangkok side."}}]},"shortcode":"BmvayNkljgV","edge_media_to_comment":{"count":10},"taken_at_timestamp":1534854454,"dimensions":{"height":717,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/429583bbb03f5bb4009f3cfbd584e468/5C0938FB/t51.2885-15/e35/39494034_697909037236396_5157876872020754432_n.jpg","edge_liked_by":{"count":164},"edge_media_preview_like":{"count":164},"owner":{"id":"2566444"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dcbe9dcc16fa4f8d1ec33767fd0a12e9/5C0974F0/t51.2885-15/sh0.08/e35/c181.0.717.717/s640x640/39494034_697909037236396_5157876872020754432_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/c1e0f685d65b024832dafade52114307/5C1A1EFA/t51.2885-15/e35/c181.0.717.717/s150x150/39494034_697909037236396_5157876872020754432_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/6ed1a0fc784fa5c51bf0639210d6a120/5C35BDB0/t51.2885-15/e35/c181.0.717.717/s240x240/39494034_697909037236396_5157876872020754432_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/60e7b1002b300fc548212b584c23f0b2/5BFC320A/t51.2885-15/e35/c181.0.717.717/s320x320/39494034_697909037236396_5157876872020754432_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/eed4b3b7f52536efbb5285c33e1c8f6d/5C0A8950/t51.2885-15/e35/c181.0.717.717/s480x480/39494034_697909037236396_5157876872020754432_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dcbe9dcc16fa4f8d1ec33767fd0a12e9/5C0974F0/t51.2885-15/sh0.08/e35/c181.0.717.717/s640x640/39494034_697909037236396_5157876872020754432_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}}]},"edge_hashtag_to_content_advisory":{"count":0,"edges":[]}}}}]},"gatekeepers":{"sf":true,"ld":true,"vl":true,"seo":true,"seoht":true,"2fac":true,"saa":true,"phone_qp":true},"knobs":{"acct:ntb":0,"cb":0,"captcha":0},"qe":{"form_navigation_dialog":{"g":"test","p":{"show_sign_in_navigation_dialog":"true"}},"cred_man":{"g":"","p":{}},"iab":{"g":"test","p":{"has_open_app_ios":"true"}},"app_upsell_li":{"g":"","p":{}},"app_upsell":{"g":"control_only_loggedout_upsell","p":{"has_only_app_upsell":"false","has_app_and_loggedout_upsell":"false"}},"stale_fix":{"g":"","p":{}},"dash_for_vod":{"g":"","p":{}},"profile_header_name":{"g":"","p":{}},"bc3l":{"g":"","p":{}},"direct_conversation_reporting":{"g":"","p":{}},"general_reporting":{"g":"","p":{}},"reporting":{"g":"","p":{}},"acc_recovery_link":{"g":"","p":{}},"notif":{"g":"","p":{}},"fb_unlink":{"g":"","p":{}},"mobile_stories_doodling":{"g":"","p":{}},"mobile_cancel":{"g":"","p":{}},"show_copy_link":{"g":"","p":{}},"mobile_logout":{"g":"","p":{}},"p_edit":{"g":"test","p":{"has_confirm_email":"true"}},"404_as_react":{"g":"","p":{}},"acc_recovery":{"g":"control_without_fb_login_02_09_18","p":{"has_fb_login_button":"false"}},"collections":{"g":"","p":{}},"comment_ta":{"g":"","p":{}},"su":{"g":"","p":{}},"disc_ppl":{"g":"","p":{}},"ebd_ul":{"g":"","p":{}},"ebdsim_li":{"g":"test_srcset","p":{"use_srcset":"true"}},"ebdsim_lo":{"g":"","p":{}},"empty_feed":{"g":"","p":{}},"bundles":{"g":"test_06_27","p":{"bundle_variant":"metro"}},"exit_story_creation":{"g":"","p":{}},"appsell":{"g":"","p":{}},"imgopt":{"g":"control","p":{}},"follow_button":{"g":"test","p":{"is_inline":"true"}},"loggedout":{"g":"test_follow_lists_06_05","p":{"can_open_follow":"true"}},"loggedout_upsell":{"g":"test_with_new_loggedout_upsell_content_03_15_18","p":{"has_new_loggedout_upsell_content":"true"}},"msisdn":{"g":"","p":{}},"bg_sync":{"g":"test","p":{"is_enabled":"true"}},"onetaplogin":{"g":"","p":{}},"login_poe":{"g":"","p":{}},"private_lo":{"g":"","p":{}},"profile_tabs":{"g":"","p":{}},"push_notifications":{"g":"","p":{}},"reg":{"g":"","p":{}},"reg_vp":{"g":"test_group_2","p":{"hide_value_prop":"true"}},"report_media":{"g":"","p":{}},"report_profile":{"g":"test","p":{"is_enabled":"true"}},"scroll_log":{"g":"","p":{}},"sidecar_swipe":{"g":"","p":{}},"su_universe":{"g":"","p":{}},"stale":{"g":"","p":{}},"stories_lo":{"g":"control_06_01","p":{"contextual_login":"false"}},"stories":{"g":"","p":{}},"tp_pblshr":{"g":"","p":{}},"video":{"g":"","p":{}},"gdpr_eu_tos":{"g":"","p":{}},"gdpr_row_tos":{"g":"test_05_01","p":{"tos_version":"row"}},"fd_gr":{"g":"","p":{}},"felix":{"g":"test","p":{"is_enabled":"true"}},"felix_clear_fb_cookie":{"g":"control","p":{"is_enabled":"true","blacklist":"fbsr_124024574287414"}},"felix_creation_duration_limits":{"g":"dogfooding","p":{"minimum_length_seconds":"15","maximum_length_seconds":"600"}},"felix_creation_enabled":{"g":"control","p":{"is_enabled":"true"}},"felix_creation_fb_crossposting":{"g":"control","p":{"is_enabled":"false"}},"felix_creation_fb_crossposting_v2":{"g":"control","p":{"is_enabled":"true"}},"felix_creation_validation":{"g":"control","p":{"edit_video_controls":"true","max_video_size_in_bytes":"3600000000","title_maximum_length":"75","description_maximum_length":"2200","valid_cover_mime_types":"image/jpeg,image/png","valid_video_mime_types":"video/mp4,video/quicktime","valid_video_extensions":"mp4,mov"}},"felix_creation_video_upload":{"g":"","p":{}},"felix_early_onboarding":{"g":"","p":{}},"pride":{"g":"","p":{}},"unfollow_confirm":{"g":"test","p":{"no_feed_unfollow":"true"}},"profile_enhance_li":{"g":"","p":{}},"profile_enhance_lo":{"g":"","p":{}},"phone_confirm":{"g":"","p":{}},"comment_enhance":{"g":"","p":{}},"mweb_media_chaining":{"g":"control","p":{"should_show_media_chaining":"false"}},"mweb_topical_explore":{"g":"","p":{}},"web_nametag":{"g":"","p":{}},"image_downgrade":{"g":"","p":{}},"image_downgrade_lite":{"g":"test","p":{"should_downgrade":"true"}},"follow_all_fb":{"g":"","p":{}},"lite_direct_upsell":{"g":"","p":{}},"web_loggedout_noop":{"g":"","p":{}},"stories_video_preload":{"g":"","p":{}},"lite_stories_video_preload":{"g":"test","p":{"disable_preload":"true"}},"a2hs_heuristic_uc":{"g":"","p":{}},"a2hs_heuristic_non_uc":{"g":"","p":{}},"web_hashtag":{"g":"","p":{}},"header_scroll":{"g":"","p":{}},"rout":{"g":"","p":{}},"websr":{"g":"search_results_only_08_13","p":{"has_rings_on_followers":"false","has_rings_on_disc_ppl":"false","has_rings_on_likers":"false","has_rings_on_followings":"false","has_rings_on_search_results":"true","has_rings_on_activity":"false"}},"web_lo_follow":{"g":"","p":{}},"web_share":{"g":"","p":{}},"lite_rating":{"g":"","p":{"is_enabled":"false"}},"web_embeds_share":{"g":"","p":{}},"web_share_lo":{"g":"","p":{}},"web_embeds_logged_out":{"g":"","p":{}},"sl":{"g":"test","p":{"show_logo":"true"}},"reg_nux":{"g":"","p":{}}},"hostname":"www.instagram.com","platform":"web","rhx_gis":"a409cac1b5c9d075bb386e195ecf9ff1","nonce":"jHGO8uaBhe9x5ZXFOAC6GQ==","zero_data":{},"rollout_hash":"7d2767d2f983","bundle_variant":"metro","probably_has_app":true}';

        $expected = [
                [
                    "display_url" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/6d3b23ae486c0a1f09b7137ef8f3f90e/5C0918BA/t51.2885-15/e35/39381489_420732498331428_3696641758545838080_n.jpg",
                    "thumbnails" => 
                        [
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/b9aa2baf11935a55065078559cfe9219/5C1B49F8/t51.2885-15/e35/s150x150/39381489_420732498331428_3696641758545838080_n.jpg",
                                    "config_width" => 150,
                                    "config_height" => 150,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/d4a5fa0fedfb8a563f707ee55593df5c/5BFA99B2/t51.2885-15/e35/s240x240/39381489_420732498331428_3696641758545838080_n.jpg",
                                    "config_width" => 240,
                                    "config_height" => 240,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7bc642b4ccd10b33dc3fb1d4ba496da/5BFB1908/t51.2885-15/e35/s320x320/39381489_420732498331428_3696641758545838080_n.jpg",
                                    "config_width" => 320,
                                    "config_height" => 320,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/e048c29d6193b840f8c5e605be1e9d8b/5C35A952/t51.2885-15/e35/s480x480/39381489_420732498331428_3696641758545838080_n.jpg",
                                    "config_width" => 480,
                                    "config_height" => 480,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7943aac381804d1184302b6f221c5a6/5BFCE15F/t51.2885-15/sh0.08/e35/s640x640/39381489_420732498331428_3696641758545838080_n.jpg",
                                    "config_width" => 640,
                                    "config_height" => 640,
                                ],
        
                        ],
                    "likes_count" => 16,
                    "comments_count" => 6,
                    "short_code" => "Bm2VIdXA5nO",
                    "dimensions" => 
                        [
                            "height" => 1080,
                            "width" => 1080,
                        ],
                    "caption" => "เอเชียทีคหน้าตรง ความงามของฝั่งเจ้าพระยาฝั่งตะวันออก วัฒนธรรมความเจริญบริเวณเลียบฝั่งแม่น้ำ จึงเป็นจุดท่องเที่ยวที่นิยมของชาวต่างประเทศ #asiatique #bhumibolbridge #chaoprayariver",
                    "is_video" => false
                ],
                [
                    "display_url" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/58241dfa9418df02b7e95b2faada49eb/5C365682/t51.2885-15/e35/39334380_320104778564057_3376495330093694976_n.jpg",
                    "thumbnails" => 
                        [
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/a29772afeeaee0f99d92972696f32a59/5BFAFBC0/t51.2885-15/e35/s150x150/39334380_320104778564057_3376495330093694976_n.jpg",
                                    "config_width" => 150,
                                    "config_height" => 150,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/660db8ef0f9990827693b9afcff60707/5BFEAA8A/t51.2885-15/e35/s240x240/39334380_320104778564057_3376495330093694976_n.jpg",
                                    "config_width" => 240,
                                    "config_height" => 240,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/6d632993cc8102ad284e4f3696dbc31b/5C18AF30/t51.2885-15/e35/s320x320/39334380_320104778564057_3376495330093694976_n.jpg",
                                    "config_width" => 320,
                                    "config_height" => 320,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/e7431c70b1221897f06ec6066f1ea5f0/5C37C96A/t51.2885-15/e35/s480x480/39334380_320104778564057_3376495330093694976_n.jpg",
                                    "config_width" => 480,
                                    "config_height" => 480,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/efc55008112f6ce3d89e40c7dd13eb5b/5C07EA67/t51.2885-15/sh0.08/e35/s640x640/39334380_320104778564057_3376495330093694976_n.jpg",
                                    "config_width" => 640,
                                    "config_height" => 640,
                                ],
                        ],
                    "likes_count" => 2,
                    "comments_count" => 0,
                    "short_code" => "Bm1DRr4F8yr",
                    "dimensions" => 
                        [
                            "height" => 1080,
                            "width" => 1080,
                        ],
                    "caption" => "บางทีท้องฟ้าก็ดูกว้างไป #ท้องฟ้ากับเสาไฟ #bhumibolbridge #bangkok #twilight",
                    "is_video" => false
                ],
                [
                    "display_url" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/94f1baaa4a850e1f86fab8b7a26c2109/5C1C3D1D/t51.2885-15/e35/39337324_996624327181364_8478193634745778176_n.jpg",
                    "thumbnails" => 
                        [
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/f5bb75af927b8e255812410c06803cbb/5C1D6DE8/t51.2885-15/e35/c120.0.480.480/s150x150/39337324_996624327181364_8478193634745778176_n.jpg",
                                    "config_width" => 150,
                                    "config_height" => 150,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/4d4e6602ddb8bbd6e8f9578b8565df09/5C3AA5A2/t51.2885-15/e35/c120.0.480.480/s240x240/39337324_996624327181364_8478193634745778176_n.jpg",
                                    "config_width" => 240,
                                    "config_height" => 240,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/bcef364c65d75ff79dc018f3aefd228c/5C16CE18/t51.2885-15/e35/c120.0.480.480/s320x320/39337324_996624327181364_8478193634745778176_n.jpg",
                                    "config_width" => 320,
                                    "config_height" => 320,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg",
                                    "config_width" => 480,
                                    "config_height" => 480,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg",
                                    "config_width" => 640,
                                    "config_height" => 640,
                                ],
        
                        ],
                    "likes_count" => 19,
                    "comments_count" => 0,
                    "short_code" => "Bm0HxBFlp8N",
                    "dimensions" => 
                        [
                            "height" => 500,
                            "width" => 750,
                        ],
                    "caption" => "ที่นี่พระประแดง \nThere's no place like home.\n#phrapradaeng #pier #bridge #boat #bhumibolbridge #river #greenlung",
                    "is_video" => false
                ],
                [
                    "display_url" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/9ea4b508ea478ef3708fa9581f6bd948/5C1C8B6D/t51.2885-15/e35/39835919_2086052055056997_2157845299551272960_n.jpg",
                    "thumbnails" => 
                        [
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/628f39cae12a0de00952ec4343415fd4/5C1C4852/t51.2885-15/e35/s150x150/39835919_2086052055056997_2157845299551272960_n.jpg",
                                    "config_width" => 150,
                                    "config_height" => 150,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/f24bd0f90d8ecfd6d7fae519e6958fa1/5BFD9F54/t51.2885-15/e35/s240x240/39835919_2086052055056997_2157845299551272960_n.jpg",
                                    "config_width" => 240,
                                    "config_height" => 240,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/c56ff3c4c2a62e32e23fc7f9269b47f1/5C375A2A/t51.2885-15/e35/s320x320/39835919_2086052055056997_2157845299551272960_n.jpg",
                                    "config_width" => 320,
                                    "config_height" => 320,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/7bb1b53080b50b40c6a767acad0fc232/5C37C36D/t51.2885-15/e35/s480x480/39835919_2086052055056997_2157845299551272960_n.jpg",
                                    "config_width" => 480,
                                    "config_height" => 480,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/dc0b46d50e88f781eacb4636aa2a03cb/5BF6ACD7/t51.2885-15/sh0.08/e35/s640x640/39835919_2086052055056997_2157845299551272960_n.jpg",
                                    "config_width" => 640,
                                    "config_height" => 640,
                                ],
                        ],
                    "likes_count" => 9,
                    "comments_count" => 2,
                    "short_code" => "BmzqfcJAafA",
                    "dimensions" => 
                        [
                            "height" => 1080,
                            "width" => 1080,
                        ],
                    "caption" => "หลังเบลอหน้าก็เบลอ ง่วงนอน\n#bhumibolbridge #watdan",
                    "is_video" => false
                ],
                [
                    "display_url" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/429583bbb03f5bb4009f3cfbd584e468/5C0938FB/t51.2885-15/e35/39494034_697909037236396_5157876872020754432_n.jpg",
                    "thumbnails" => 
                        [
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/c1e0f685d65b024832dafade52114307/5C1A1EFA/t51.2885-15/e35/c181.0.717.717/s150x150/39494034_697909037236396_5157876872020754432_n.jpg",
                                    "config_width" => 150,
                                    "config_height" => 150,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/6ed1a0fc784fa5c51bf0639210d6a120/5C35BDB0/t51.2885-15/e35/c181.0.717.717/s240x240/39494034_697909037236396_5157876872020754432_n.jpg",
                                    "config_width" => 240,
                                    "config_height" => 240,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/60e7b1002b300fc548212b584c23f0b2/5BFC320A/t51.2885-15/e35/c181.0.717.717/s320x320/39494034_697909037236396_5157876872020754432_n.jpg",
                                    "config_width" => 320,
                                    "config_height" => 320,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/eed4b3b7f52536efbb5285c33e1c8f6d/5C0A8950/t51.2885-15/e35/c181.0.717.717/s480x480/39494034_697909037236396_5157876872020754432_n.jpg",
                                    "config_width" => 480,
                                    "config_height" => 480,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/dcbe9dcc16fa4f8d1ec33767fd0a12e9/5C0974F0/t51.2885-15/sh0.08/e35/c181.0.717.717/s640x640/39494034_697909037236396_5157876872020754432_n.jpg",
                                    "config_width" => 640,
                                    "config_height" => 640,
                                ],
                        ],
                    "likes_count" => 164,
                    "comments_count" => 10,
                    "short_code" => "BmvayNkljgV",
                    "dimensions" => 
                        [
                            "height" => 717,
                            "width" => 1080,
                        ],
                    "caption" => "Bhumibol Bridge and Klong Lad Pho Flood Gate at Dusk, Samutprakarn Province.\n-\n-\nView from Chao Praya River at Bangkok side.",
                    "is_video" => false
                ],
            ];

        $scraper = new TagScraper();
        $tags = $scraper->parse($content);

        $this->assertEquals(5, count($tags));
        $this->assertEquals($expected, $tags);
    }

    public function testParseWithDataContainingSemicolon() {
        $content = 'window._sharedData = {"activity_counts":{"comment_likes":0,"comments":0,"likes":0,"relationships":0,"usertags":0},"config":{"csrf_token":"A1c74NuZYHUTTW5JfwWTNfXn9Z0wmh1x","viewer":{"allow_contacts_sync":false,"biography":"programmer, traveller, runner, hiker, photographer","external_url":"http://www.chonla.com/","full_name":"chonla","has_profile_pic":true,"id":"30727014","profile_pic_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e8640bd09eac350e0d612e5bca035eaa/5C1C46E0/t51.2885-19/11351647_537729729713576_2100710552_a.jpg","profile_pic_url_hd":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e8640bd09eac350e0d612e5bca035eaa/5C1C46E0/t51.2885-19/11351647_537729729713576_2100710552_a.jpg","username":"chonlagram"}},"supports_es6":true,"country_code":"TH","language_code":"en","locale":"en_US","entry_data":{"TagPage":[{"graphql":{"hashtag":{"id":"17841562705100603","name":"bhumibolbridge","is_following":false,"is_top_media_only":false,"profile_pic_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/5463a94d1b83e7401dbbb9fcbaadb3cb/5C168B37/t51.2885-15/e35/c0.134.1080.1080/s150x150/38905494_1917965828260543_2962362415771025408_n.jpg","edge_hashtag_to_media":{"count":2430,"page_info":{"has_next_page":true,"end_cursor":"AQBPr828ssCS2lLObcfWzK0qbDtjWAb6mku1VC9A52-I1uWLE7RkMrNk5jtkePmNROwwq-PlN3kCuPX_u-fZho9oUpT43rUHsKOnrrxepQr2GQ"},"edges":[{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852761236966709710","edge_media_to_caption":{"edges":[{"node":{"text":"เอเชียทีคหน้าตรง ความงามของฝั่งเจ้าพระยาฝั่งตะวันออก วัฒนธรรมความเจริญบริเวณเลียบฝั่งแม่น้ำ จึงเป็นจุดท่องเที่ยวที่นิยมของชาวต่างประเทศ ;) #asiatique #bhumibolbridge #chaoprayariver"}}]},"shortcode":"Bm2VIdXA5nO","edge_media_to_comment":{"count":6},"taken_at_timestamp":1535086372,"dimensions":{"height":1080,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/6d3b23ae486c0a1f09b7137ef8f3f90e/5C0918BA/t51.2885-15/e35/39381489_420732498331428_3696641758545838080_n.jpg","edge_liked_by":{"count":16},"edge_media_preview_like":{"count":16},"owner":{"id":"198351430"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7943aac381804d1184302b6f221c5a6/5BFCE15F/t51.2885-15/sh0.08/e35/s640x640/39381489_420732498331428_3696641758545838080_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b9aa2baf11935a55065078559cfe9219/5C1B49F8/t51.2885-15/e35/s150x150/39381489_420732498331428_3696641758545838080_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d4a5fa0fedfb8a563f707ee55593df5c/5BFA99B2/t51.2885-15/e35/s240x240/39381489_420732498331428_3696641758545838080_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7bc642b4ccd10b33dc3fb1d4ba496da/5BFB1908/t51.2885-15/e35/s320x320/39381489_420732498331428_3696641758545838080_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e048c29d6193b840f8c5e605be1e9d8b/5C35A952/t51.2885-15/e35/s480x480/39381489_420732498331428_3696641758545838080_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7943aac381804d1184302b6f221c5a6/5BFCE15F/t51.2885-15/sh0.08/e35/s640x640/39381489_420732498331428_3696641758545838080_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852401231215447211","edge_media_to_caption":{"edges":[{"node":{"text":"บางทีท้องฟ้าก็ดูกว้างไป #ท้องฟ้ากับเสาไฟ #bhumibolbridge #bangkok #twilight"}}]},"shortcode":"Bm1DRr4F8yr","edge_media_to_comment":{"count":0},"taken_at_timestamp":1535043456,"dimensions":{"height":1080,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/58241dfa9418df02b7e95b2faada49eb/5C365682/t51.2885-15/e35/39334380_320104778564057_3376495330093694976_n.jpg","edge_liked_by":{"count":2},"edge_media_preview_like":{"count":2},"owner":{"id":"12002500"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/efc55008112f6ce3d89e40c7dd13eb5b/5C07EA67/t51.2885-15/sh0.08/e35/s640x640/39334380_320104778564057_3376495330093694976_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/a29772afeeaee0f99d92972696f32a59/5BFAFBC0/t51.2885-15/e35/s150x150/39334380_320104778564057_3376495330093694976_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/660db8ef0f9990827693b9afcff60707/5BFEAA8A/t51.2885-15/e35/s240x240/39334380_320104778564057_3376495330093694976_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/6d632993cc8102ad284e4f3696dbc31b/5C18AF30/t51.2885-15/e35/s320x320/39334380_320104778564057_3376495330093694976_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e7431c70b1221897f06ec6066f1ea5f0/5C37C96A/t51.2885-15/e35/s480x480/39334380_320104778564057_3376495330093694976_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/efc55008112f6ce3d89e40c7dd13eb5b/5C07EA67/t51.2885-15/sh0.08/e35/s640x640/39334380_320104778564057_3376495330093694976_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852139501503553293","edge_media_to_caption":{"edges":[{"node":{"text":"ที่นี่พระประแดง \nThere\'s no place like home.\n#phrapradaeng #pier #bridge #boat #bhumibolbridge #river #greenlung"}}]},"shortcode":"Bm0HxBFlp8N","edge_media_to_comment":{"count":0},"taken_at_timestamp":1535012255,"dimensions":{"height":500,"width":750},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/94f1baaa4a850e1f86fab8b7a26c2109/5C1C3D1D/t51.2885-15/e35/39337324_996624327181364_8478193634745778176_n.jpg","edge_liked_by":{"count":19},"edge_media_preview_like":{"count":19},"owner":{"id":"1423837820"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/f5bb75af927b8e255812410c06803cbb/5C1D6DE8/t51.2885-15/e35/c120.0.480.480/s150x150/39337324_996624327181364_8478193634745778176_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/4d4e6602ddb8bbd6e8f9578b8565df09/5C3AA5A2/t51.2885-15/e35/c120.0.480.480/s240x240/39337324_996624327181364_8478193634745778176_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/bcef364c65d75ff79dc018f3aefd228c/5C16CE18/t51.2885-15/e35/c120.0.480.480/s320x320/39337324_996624327181364_8478193634745778176_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852010750252525504","edge_media_to_caption":{"edges":[{"node":{"text":"หลังเบลอหน้าก็เบลอ ง่วงนอน\n#bhumibolbridge #watdan"}}]},"shortcode":"BmzqfcJAafA","edge_media_to_comment":{"count":2},"taken_at_timestamp":1534996907,"dimensions":{"height":1080,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/9ea4b508ea478ef3708fa9581f6bd948/5C1C8B6D/t51.2885-15/e35/39835919_2086052055056997_2157845299551272960_n.jpg","edge_liked_by":{"count":9},"edge_media_preview_like":{"count":9},"owner":{"id":"1393172596"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dc0b46d50e88f781eacb4636aa2a03cb/5BF6ACD7/t51.2885-15/sh0.08/e35/s640x640/39835919_2086052055056997_2157845299551272960_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/628f39cae12a0de00952ec4343415fd4/5C1C4852/t51.2885-15/e35/s150x150/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/f24bd0f90d8ecfd6d7fae519e6958fa1/5BFD9F54/t51.2885-15/e35/s240x240/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/c56ff3c4c2a62e32e23fc7f9269b47f1/5C375A2A/t51.2885-15/e35/s320x320/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/7bb1b53080b50b40c6a767acad0fc232/5C37C36D/t51.2885-15/e35/s480x480/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dc0b46d50e88f781eacb4636aa2a03cb/5BF6ACD7/t51.2885-15/sh0.08/e35/s640x640/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1850815771628156949","edge_media_to_caption":{"edges":[{"node":{"text":"Bhumibol Bridge and Klong Lad Pho Flood Gate at Dusk, Samutprakarn Province.\n-\n-\nView from Chao Praya River at Bangkok side."}}]},"shortcode":"BmvayNkljgV","edge_media_to_comment":{"count":10},"taken_at_timestamp":1534854454,"dimensions":{"height":717,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/429583bbb03f5bb4009f3cfbd584e468/5C0938FB/t51.2885-15/e35/39494034_697909037236396_5157876872020754432_n.jpg","edge_liked_by":{"count":164},"edge_media_preview_like":{"count":164},"owner":{"id":"2566444"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dcbe9dcc16fa4f8d1ec33767fd0a12e9/5C0974F0/t51.2885-15/sh0.08/e35/c181.0.717.717/s640x640/39494034_697909037236396_5157876872020754432_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/c1e0f685d65b024832dafade52114307/5C1A1EFA/t51.2885-15/e35/c181.0.717.717/s150x150/39494034_697909037236396_5157876872020754432_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/6ed1a0fc784fa5c51bf0639210d6a120/5C35BDB0/t51.2885-15/e35/c181.0.717.717/s240x240/39494034_697909037236396_5157876872020754432_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/60e7b1002b300fc548212b584c23f0b2/5BFC320A/t51.2885-15/e35/c181.0.717.717/s320x320/39494034_697909037236396_5157876872020754432_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/eed4b3b7f52536efbb5285c33e1c8f6d/5C0A8950/t51.2885-15/e35/c181.0.717.717/s480x480/39494034_697909037236396_5157876872020754432_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dcbe9dcc16fa4f8d1ec33767fd0a12e9/5C0974F0/t51.2885-15/sh0.08/e35/c181.0.717.717/s640x640/39494034_697909037236396_5157876872020754432_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}}]},"edge_hashtag_to_content_advisory":{"count":0,"edges":[]}}}}]},"gatekeepers":{"sf":true,"ld":true,"vl":true,"seo":true,"seoht":true,"2fac":true,"saa":true,"phone_qp":true},"knobs":{"acct:ntb":0,"cb":0,"captcha":0},"qe":{"form_navigation_dialog":{"g":"test","p":{"show_sign_in_navigation_dialog":"true"}},"cred_man":{"g":"","p":{}},"iab":{"g":"test","p":{"has_open_app_ios":"true"}},"app_upsell_li":{"g":"","p":{}},"app_upsell":{"g":"control_only_loggedout_upsell","p":{"has_only_app_upsell":"false","has_app_and_loggedout_upsell":"false"}},"stale_fix":{"g":"","p":{}},"dash_for_vod":{"g":"","p":{}},"profile_header_name":{"g":"","p":{}},"bc3l":{"g":"","p":{}},"direct_conversation_reporting":{"g":"","p":{}},"general_reporting":{"g":"","p":{}},"reporting":{"g":"","p":{}},"acc_recovery_link":{"g":"","p":{}},"notif":{"g":"","p":{}},"fb_unlink":{"g":"","p":{}},"mobile_stories_doodling":{"g":"","p":{}},"mobile_cancel":{"g":"","p":{}},"show_copy_link":{"g":"","p":{}},"mobile_logout":{"g":"","p":{}},"p_edit":{"g":"test","p":{"has_confirm_email":"true"}},"404_as_react":{"g":"","p":{}},"acc_recovery":{"g":"control_without_fb_login_02_09_18","p":{"has_fb_login_button":"false"}},"collections":{"g":"","p":{}},"comment_ta":{"g":"","p":{}},"su":{"g":"","p":{}},"disc_ppl":{"g":"","p":{}},"ebd_ul":{"g":"","p":{}},"ebdsim_li":{"g":"test_srcset","p":{"use_srcset":"true"}},"ebdsim_lo":{"g":"","p":{}},"empty_feed":{"g":"","p":{}},"bundles":{"g":"test_06_27","p":{"bundle_variant":"metro"}},"exit_story_creation":{"g":"","p":{}},"appsell":{"g":"","p":{}},"imgopt":{"g":"control","p":{}},"follow_button":{"g":"test","p":{"is_inline":"true"}},"loggedout":{"g":"test_follow_lists_06_05","p":{"can_open_follow":"true"}},"loggedout_upsell":{"g":"test_with_new_loggedout_upsell_content_03_15_18","p":{"has_new_loggedout_upsell_content":"true"}},"msisdn":{"g":"","p":{}},"bg_sync":{"g":"test","p":{"is_enabled":"true"}},"onetaplogin":{"g":"","p":{}},"login_poe":{"g":"","p":{}},"private_lo":{"g":"","p":{}},"profile_tabs":{"g":"","p":{}},"push_notifications":{"g":"","p":{}},"reg":{"g":"","p":{}},"reg_vp":{"g":"test_group_2","p":{"hide_value_prop":"true"}},"report_media":{"g":"","p":{}},"report_profile":{"g":"test","p":{"is_enabled":"true"}},"scroll_log":{"g":"","p":{}},"sidecar_swipe":{"g":"","p":{}},"su_universe":{"g":"","p":{}},"stale":{"g":"","p":{}},"stories_lo":{"g":"control_06_01","p":{"contextual_login":"false"}},"stories":{"g":"","p":{}},"tp_pblshr":{"g":"","p":{}},"video":{"g":"","p":{}},"gdpr_eu_tos":{"g":"","p":{}},"gdpr_row_tos":{"g":"test_05_01","p":{"tos_version":"row"}},"fd_gr":{"g":"","p":{}},"felix":{"g":"test","p":{"is_enabled":"true"}},"felix_clear_fb_cookie":{"g":"control","p":{"is_enabled":"true","blacklist":"fbsr_124024574287414"}},"felix_creation_duration_limits":{"g":"dogfooding","p":{"minimum_length_seconds":"15","maximum_length_seconds":"600"}},"felix_creation_enabled":{"g":"control","p":{"is_enabled":"true"}},"felix_creation_fb_crossposting":{"g":"control","p":{"is_enabled":"false"}},"felix_creation_fb_crossposting_v2":{"g":"control","p":{"is_enabled":"true"}},"felix_creation_validation":{"g":"control","p":{"edit_video_controls":"true","max_video_size_in_bytes":"3600000000","title_maximum_length":"75","description_maximum_length":"2200","valid_cover_mime_types":"image/jpeg,image/png","valid_video_mime_types":"video/mp4,video/quicktime","valid_video_extensions":"mp4,mov"}},"felix_creation_video_upload":{"g":"","p":{}},"felix_early_onboarding":{"g":"","p":{}},"pride":{"g":"","p":{}},"unfollow_confirm":{"g":"test","p":{"no_feed_unfollow":"true"}},"profile_enhance_li":{"g":"","p":{}},"profile_enhance_lo":{"g":"","p":{}},"phone_confirm":{"g":"","p":{}},"comment_enhance":{"g":"","p":{}},"mweb_media_chaining":{"g":"control","p":{"should_show_media_chaining":"false"}},"mweb_topical_explore":{"g":"","p":{}},"web_nametag":{"g":"","p":{}},"image_downgrade":{"g":"","p":{}},"image_downgrade_lite":{"g":"test","p":{"should_downgrade":"true"}},"follow_all_fb":{"g":"","p":{}},"lite_direct_upsell":{"g":"","p":{}},"web_loggedout_noop":{"g":"","p":{}},"stories_video_preload":{"g":"","p":{}},"lite_stories_video_preload":{"g":"test","p":{"disable_preload":"true"}},"a2hs_heuristic_uc":{"g":"","p":{}},"a2hs_heuristic_non_uc":{"g":"","p":{}},"web_hashtag":{"g":"","p":{}},"header_scroll":{"g":"","p":{}},"rout":{"g":"","p":{}},"websr":{"g":"search_results_only_08_13","p":{"has_rings_on_followers":"false","has_rings_on_disc_ppl":"false","has_rings_on_likers":"false","has_rings_on_followings":"false","has_rings_on_search_results":"true","has_rings_on_activity":"false"}},"web_lo_follow":{"g":"","p":{}},"web_share":{"g":"","p":{}},"lite_rating":{"g":"","p":{"is_enabled":"false"}},"web_embeds_share":{"g":"","p":{}},"web_share_lo":{"g":"","p":{}},"web_embeds_logged_out":{"g":"","p":{}},"sl":{"g":"test","p":{"show_logo":"true"}},"reg_nux":{"g":"","p":{}}},"hostname":"www.instagram.com","platform":"web","rhx_gis":"a409cac1b5c9d075bb386e195ecf9ff1","nonce":"jHGO8uaBhe9x5ZXFOAC6GQ==","zero_data":{},"rollout_hash":"7d2767d2f983","bundle_variant":"metro","probably_has_app":true}';

        $expected = [
                [
                    "display_url" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/6d3b23ae486c0a1f09b7137ef8f3f90e/5C0918BA/t51.2885-15/e35/39381489_420732498331428_3696641758545838080_n.jpg",
                    "thumbnails" => 
                        [
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/b9aa2baf11935a55065078559cfe9219/5C1B49F8/t51.2885-15/e35/s150x150/39381489_420732498331428_3696641758545838080_n.jpg",
                                    "config_width" => 150,
                                    "config_height" => 150,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/d4a5fa0fedfb8a563f707ee55593df5c/5BFA99B2/t51.2885-15/e35/s240x240/39381489_420732498331428_3696641758545838080_n.jpg",
                                    "config_width" => 240,
                                    "config_height" => 240,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7bc642b4ccd10b33dc3fb1d4ba496da/5BFB1908/t51.2885-15/e35/s320x320/39381489_420732498331428_3696641758545838080_n.jpg",
                                    "config_width" => 320,
                                    "config_height" => 320,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/e048c29d6193b840f8c5e605be1e9d8b/5C35A952/t51.2885-15/e35/s480x480/39381489_420732498331428_3696641758545838080_n.jpg",
                                    "config_width" => 480,
                                    "config_height" => 480,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7943aac381804d1184302b6f221c5a6/5BFCE15F/t51.2885-15/sh0.08/e35/s640x640/39381489_420732498331428_3696641758545838080_n.jpg",
                                    "config_width" => 640,
                                    "config_height" => 640,
                                ],
        
                        ],
                    "likes_count" => 16,
                    "comments_count" => 6,
                    "short_code" => "Bm2VIdXA5nO",
                    "dimensions" => 
                        [
                            "height" => 1080,
                            "width" => 1080,
                        ],
                    "caption" => "เอเชียทีคหน้าตรง ความงามของฝั่งเจ้าพระยาฝั่งตะวันออก วัฒนธรรมความเจริญบริเวณเลียบฝั่งแม่น้ำ จึงเป็นจุดท่องเที่ยวที่นิยมของชาวต่างประเทศ ;) #asiatique #bhumibolbridge #chaoprayariver",
                    "is_video" => false
                ],
                [
                    "display_url" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/58241dfa9418df02b7e95b2faada49eb/5C365682/t51.2885-15/e35/39334380_320104778564057_3376495330093694976_n.jpg",
                    "thumbnails" => 
                        [
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/a29772afeeaee0f99d92972696f32a59/5BFAFBC0/t51.2885-15/e35/s150x150/39334380_320104778564057_3376495330093694976_n.jpg",
                                    "config_width" => 150,
                                    "config_height" => 150,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/660db8ef0f9990827693b9afcff60707/5BFEAA8A/t51.2885-15/e35/s240x240/39334380_320104778564057_3376495330093694976_n.jpg",
                                    "config_width" => 240,
                                    "config_height" => 240,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/6d632993cc8102ad284e4f3696dbc31b/5C18AF30/t51.2885-15/e35/s320x320/39334380_320104778564057_3376495330093694976_n.jpg",
                                    "config_width" => 320,
                                    "config_height" => 320,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/e7431c70b1221897f06ec6066f1ea5f0/5C37C96A/t51.2885-15/e35/s480x480/39334380_320104778564057_3376495330093694976_n.jpg",
                                    "config_width" => 480,
                                    "config_height" => 480,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/efc55008112f6ce3d89e40c7dd13eb5b/5C07EA67/t51.2885-15/sh0.08/e35/s640x640/39334380_320104778564057_3376495330093694976_n.jpg",
                                    "config_width" => 640,
                                    "config_height" => 640,
                                ],
                        ],
                    "likes_count" => 2,
                    "comments_count" => 0,
                    "short_code" => "Bm1DRr4F8yr",
                    "dimensions" => 
                        [
                            "height" => 1080,
                            "width" => 1080,
                        ],
                    "caption" => "บางทีท้องฟ้าก็ดูกว้างไป #ท้องฟ้ากับเสาไฟ #bhumibolbridge #bangkok #twilight",
                    "is_video" => false
                ],
                [
                    "display_url" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/94f1baaa4a850e1f86fab8b7a26c2109/5C1C3D1D/t51.2885-15/e35/39337324_996624327181364_8478193634745778176_n.jpg",
                    "thumbnails" => 
                        [
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/f5bb75af927b8e255812410c06803cbb/5C1D6DE8/t51.2885-15/e35/c120.0.480.480/s150x150/39337324_996624327181364_8478193634745778176_n.jpg",
                                    "config_width" => 150,
                                    "config_height" => 150,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/4d4e6602ddb8bbd6e8f9578b8565df09/5C3AA5A2/t51.2885-15/e35/c120.0.480.480/s240x240/39337324_996624327181364_8478193634745778176_n.jpg",
                                    "config_width" => 240,
                                    "config_height" => 240,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/bcef364c65d75ff79dc018f3aefd228c/5C16CE18/t51.2885-15/e35/c120.0.480.480/s320x320/39337324_996624327181364_8478193634745778176_n.jpg",
                                    "config_width" => 320,
                                    "config_height" => 320,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg",
                                    "config_width" => 480,
                                    "config_height" => 480,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg",
                                    "config_width" => 640,
                                    "config_height" => 640,
                                ],
        
                        ],
                    "likes_count" => 19,
                    "comments_count" => 0,
                    "short_code" => "Bm0HxBFlp8N",
                    "dimensions" => 
                        [
                            "height" => 500,
                            "width" => 750,
                        ],
                    "caption" => "ที่นี่พระประแดง \nThere's no place like home.\n#phrapradaeng #pier #bridge #boat #bhumibolbridge #river #greenlung",
                    "is_video" => false
                ],
                [
                    "display_url" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/9ea4b508ea478ef3708fa9581f6bd948/5C1C8B6D/t51.2885-15/e35/39835919_2086052055056997_2157845299551272960_n.jpg",
                    "thumbnails" => 
                        [
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/628f39cae12a0de00952ec4343415fd4/5C1C4852/t51.2885-15/e35/s150x150/39835919_2086052055056997_2157845299551272960_n.jpg",
                                    "config_width" => 150,
                                    "config_height" => 150,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/f24bd0f90d8ecfd6d7fae519e6958fa1/5BFD9F54/t51.2885-15/e35/s240x240/39835919_2086052055056997_2157845299551272960_n.jpg",
                                    "config_width" => 240,
                                    "config_height" => 240,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/c56ff3c4c2a62e32e23fc7f9269b47f1/5C375A2A/t51.2885-15/e35/s320x320/39835919_2086052055056997_2157845299551272960_n.jpg",
                                    "config_width" => 320,
                                    "config_height" => 320,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/7bb1b53080b50b40c6a767acad0fc232/5C37C36D/t51.2885-15/e35/s480x480/39835919_2086052055056997_2157845299551272960_n.jpg",
                                    "config_width" => 480,
                                    "config_height" => 480,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/dc0b46d50e88f781eacb4636aa2a03cb/5BF6ACD7/t51.2885-15/sh0.08/e35/s640x640/39835919_2086052055056997_2157845299551272960_n.jpg",
                                    "config_width" => 640,
                                    "config_height" => 640,
                                ],
                        ],
                    "likes_count" => 9,
                    "comments_count" => 2,
                    "short_code" => "BmzqfcJAafA",
                    "dimensions" => 
                        [
                            "height" => 1080,
                            "width" => 1080,
                        ],
                    "caption" => "หลังเบลอหน้าก็เบลอ ง่วงนอน\n#bhumibolbridge #watdan",
                    "is_video" => false
                ],
                [
                    "display_url" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/429583bbb03f5bb4009f3cfbd584e468/5C0938FB/t51.2885-15/e35/39494034_697909037236396_5157876872020754432_n.jpg",
                    "thumbnails" => 
                        [
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/c1e0f685d65b024832dafade52114307/5C1A1EFA/t51.2885-15/e35/c181.0.717.717/s150x150/39494034_697909037236396_5157876872020754432_n.jpg",
                                    "config_width" => 150,
                                    "config_height" => 150,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/6ed1a0fc784fa5c51bf0639210d6a120/5C35BDB0/t51.2885-15/e35/c181.0.717.717/s240x240/39494034_697909037236396_5157876872020754432_n.jpg",
                                    "config_width" => 240,
                                    "config_height" => 240,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/60e7b1002b300fc548212b584c23f0b2/5BFC320A/t51.2885-15/e35/c181.0.717.717/s320x320/39494034_697909037236396_5157876872020754432_n.jpg",
                                    "config_width" => 320,
                                    "config_height" => 320,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/eed4b3b7f52536efbb5285c33e1c8f6d/5C0A8950/t51.2885-15/e35/c181.0.717.717/s480x480/39494034_697909037236396_5157876872020754432_n.jpg",
                                    "config_width" => 480,
                                    "config_height" => 480,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/dcbe9dcc16fa4f8d1ec33767fd0a12e9/5C0974F0/t51.2885-15/sh0.08/e35/c181.0.717.717/s640x640/39494034_697909037236396_5157876872020754432_n.jpg",
                                    "config_width" => 640,
                                    "config_height" => 640,
                                ],
                        ],
                    "likes_count" => 164,
                    "comments_count" => 10,
                    "short_code" => "BmvayNkljgV",
                    "dimensions" => 
                        [
                            "height" => 717,
                            "width" => 1080,
                        ],
                    "caption" => "Bhumibol Bridge and Klong Lad Pho Flood Gate at Dusk, Samutprakarn Province.\n-\n-\nView from Chao Praya River at Bangkok side.",
                    "is_video" => false
                ],
            ];

        $scraper = new TagScraper();
        $tags = $scraper->parse($content);

        $this->assertEquals(5, count($tags));
    }

    public function testParseWithDataContainingMultipleSemicolons() {
        $content = 'window._sharedData = {"activity_counts":{"comment_likes":0,"comments":0,"likes":0,"relationships":0,"usertags":0},"config":{"csrf_token":"A1c74NuZYHUTTW5JfwWTNfXn9Z0wmh1x","viewer":{"allow_contacts_sync":false,"biography":"programmer, traveller, runner, hiker, photographer","external_url":"http://www.chonla.com/","full_name":"chonla","has_profile_pic":true,"id":"30727014","profile_pic_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e8640bd09eac350e0d612e5bca035eaa/5C1C46E0/t51.2885-19/11351647_537729729713576_2100710552_a.jpg","profile_pic_url_hd":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e8640bd09eac350e0d612e5bca035eaa/5C1C46E0/t51.2885-19/11351647_537729729713576_2100710552_a.jpg","username":"chonlagram"}},"supports_es6":true,"country_code":"TH","language_code":"en","locale":"en_US","entry_data":{"TagPage":[{"graphql":{"hashtag":{"id":"17841562705100603","name":"bhumibolbridge","is_following":false,"is_top_media_only":false,"profile_pic_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/5463a94d1b83e7401dbbb9fcbaadb3cb/5C168B37/t51.2885-15/e35/c0.134.1080.1080/s150x150/38905494_1917965828260543_2962362415771025408_n.jpg","edge_hashtag_to_media":{"count":2430,"page_info":{"has_next_page":true,"end_cursor":"AQBPr828ssCS2lLObcfWzK0qbDtjWAb6mku1VC9A52-I1uWLE7RkMrNk5jtkePmNROwwq-PlN3kCuPX_u-fZho9oUpT43rUHsKOnrrxepQr2GQ"},"edges":[{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852761236966709710","edge_media_to_caption":{"edges":[{"node":{"text":"เอเชียทีคหน้าตรง ความงามของฝั่งเจ้าพระยาฝั่งตะวันออก วัฒนธรรมความเจริญบริเวณเลียบฝั่งแม่น้ำ จึงเป็นจุดท่องเที่ยวที่นิยมของชาวต่างประเทศ ;) #asiatique #bhumibolbridge #chaoprayariver"}}]},"shortcode":"Bm2VIdXA5nO","edge_media_to_comment":{"count":6},"taken_at_timestamp":1535086372,"dimensions":{"height":1080,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/6d3b23ae486c0a1f09b7137ef8f3f90e/5C0918BA/t51.2885-15/e35/39381489_420732498331428_3696641758545838080_n.jpg","edge_liked_by":{"count":16},"edge_media_preview_like":{"count":16},"owner":{"id":"198351430"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7943aac381804d1184302b6f221c5a6/5BFCE15F/t51.2885-15/sh0.08/e35/s640x640/39381489_420732498331428_3696641758545838080_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b9aa2baf11935a55065078559cfe9219/5C1B49F8/t51.2885-15/e35/s150x150/39381489_420732498331428_3696641758545838080_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d4a5fa0fedfb8a563f707ee55593df5c/5BFA99B2/t51.2885-15/e35/s240x240/39381489_420732498331428_3696641758545838080_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7bc642b4ccd10b33dc3fb1d4ba496da/5BFB1908/t51.2885-15/e35/s320x320/39381489_420732498331428_3696641758545838080_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e048c29d6193b840f8c5e605be1e9d8b/5C35A952/t51.2885-15/e35/s480x480/39381489_420732498331428_3696641758545838080_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7943aac381804d1184302b6f221c5a6/5BFCE15F/t51.2885-15/sh0.08/e35/s640x640/39381489_420732498331428_3696641758545838080_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852401231215447211","edge_media_to_caption":{"edges":[{"node":{"text":"บางทีท้องฟ้าก็ดูกว้างไป #ท้องฟ้ากับเสาไฟ #bhumibolbridge #bangkok #twilight"}}]},"shortcode":"Bm1DRr4F8yr","edge_media_to_comment":{"count":0},"taken_at_timestamp":1535043456,"dimensions":{"height":1080,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/58241dfa9418df02b7e95b2faada49eb/5C365682/t51.2885-15/e35/39334380_320104778564057_3376495330093694976_n.jpg","edge_liked_by":{"count":2},"edge_media_preview_like":{"count":2},"owner":{"id":"12002500"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/efc55008112f6ce3d89e40c7dd13eb5b/5C07EA67/t51.2885-15/sh0.08/e35/s640x640/39334380_320104778564057_3376495330093694976_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/a29772afeeaee0f99d92972696f32a59/5BFAFBC0/t51.2885-15/e35/s150x150/39334380_320104778564057_3376495330093694976_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/660db8ef0f9990827693b9afcff60707/5BFEAA8A/t51.2885-15/e35/s240x240/39334380_320104778564057_3376495330093694976_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/6d632993cc8102ad284e4f3696dbc31b/5C18AF30/t51.2885-15/e35/s320x320/39334380_320104778564057_3376495330093694976_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e7431c70b1221897f06ec6066f1ea5f0/5C37C96A/t51.2885-15/e35/s480x480/39334380_320104778564057_3376495330093694976_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/efc55008112f6ce3d89e40c7dd13eb5b/5C07EA67/t51.2885-15/sh0.08/e35/s640x640/39334380_320104778564057_3376495330093694976_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852139501503553293","edge_media_to_caption":{"edges":[{"node":{"text":"ที่นี่พระประแดง \nThere\'s no place like home.\n#phrapradaeng #pier #bridge #boat #bhumibolbridge #river #greenlung"}}]},"shortcode":"Bm0HxBFlp8N","edge_media_to_comment":{"count":0},"taken_at_timestamp":1535012255,"dimensions":{"height":500,"width":750},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/94f1baaa4a850e1f86fab8b7a26c2109/5C1C3D1D/t51.2885-15/e35/39337324_996624327181364_8478193634745778176_n.jpg","edge_liked_by":{"count":19},"edge_media_preview_like":{"count":19},"owner":{"id":"1423837820"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/f5bb75af927b8e255812410c06803cbb/5C1D6DE8/t51.2885-15/e35/c120.0.480.480/s150x150/39337324_996624327181364_8478193634745778176_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/4d4e6602ddb8bbd6e8f9578b8565df09/5C3AA5A2/t51.2885-15/e35/c120.0.480.480/s240x240/39337324_996624327181364_8478193634745778176_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/bcef364c65d75ff79dc018f3aefd228c/5C16CE18/t51.2885-15/e35/c120.0.480.480/s320x320/39337324_996624327181364_8478193634745778176_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852010750252525504","edge_media_to_caption":{"edges":[{"node":{"text":"หลังเบลอหน้าก็เบลอ ;; ง่วงนอน\n#bhumibolbridge #watdan"}}]},"shortcode":"BmzqfcJAafA","edge_media_to_comment":{"count":2},"taken_at_timestamp":1534996907,"dimensions":{"height":1080,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/9ea4b508ea478ef3708fa9581f6bd948/5C1C8B6D/t51.2885-15/e35/39835919_2086052055056997_2157845299551272960_n.jpg","edge_liked_by":{"count":9},"edge_media_preview_like":{"count":9},"owner":{"id":"1393172596"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dc0b46d50e88f781eacb4636aa2a03cb/5BF6ACD7/t51.2885-15/sh0.08/e35/s640x640/39835919_2086052055056997_2157845299551272960_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/628f39cae12a0de00952ec4343415fd4/5C1C4852/t51.2885-15/e35/s150x150/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/f24bd0f90d8ecfd6d7fae519e6958fa1/5BFD9F54/t51.2885-15/e35/s240x240/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/c56ff3c4c2a62e32e23fc7f9269b47f1/5C375A2A/t51.2885-15/e35/s320x320/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/7bb1b53080b50b40c6a767acad0fc232/5C37C36D/t51.2885-15/e35/s480x480/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dc0b46d50e88f781eacb4636aa2a03cb/5BF6ACD7/t51.2885-15/sh0.08/e35/s640x640/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1850815771628156949","edge_media_to_caption":{"edges":[{"node":{"text":"Bhumibol Bridge and Klong Lad Pho Flood Gate at Dusk, Samutprakarn Province.\n-\n-\nView from Chao Praya River at Bangkok side."}}]},"shortcode":"BmvayNkljgV","edge_media_to_comment":{"count":10},"taken_at_timestamp":1534854454,"dimensions":{"height":717,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/429583bbb03f5bb4009f3cfbd584e468/5C0938FB/t51.2885-15/e35/39494034_697909037236396_5157876872020754432_n.jpg","edge_liked_by":{"count":164},"edge_media_preview_like":{"count":164},"owner":{"id":"2566444"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dcbe9dcc16fa4f8d1ec33767fd0a12e9/5C0974F0/t51.2885-15/sh0.08/e35/c181.0.717.717/s640x640/39494034_697909037236396_5157876872020754432_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/c1e0f685d65b024832dafade52114307/5C1A1EFA/t51.2885-15/e35/c181.0.717.717/s150x150/39494034_697909037236396_5157876872020754432_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/6ed1a0fc784fa5c51bf0639210d6a120/5C35BDB0/t51.2885-15/e35/c181.0.717.717/s240x240/39494034_697909037236396_5157876872020754432_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/60e7b1002b300fc548212b584c23f0b2/5BFC320A/t51.2885-15/e35/c181.0.717.717/s320x320/39494034_697909037236396_5157876872020754432_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/eed4b3b7f52536efbb5285c33e1c8f6d/5C0A8950/t51.2885-15/e35/c181.0.717.717/s480x480/39494034_697909037236396_5157876872020754432_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dcbe9dcc16fa4f8d1ec33767fd0a12e9/5C0974F0/t51.2885-15/sh0.08/e35/c181.0.717.717/s640x640/39494034_697909037236396_5157876872020754432_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}}]},"edge_hashtag_to_content_advisory":{"count":0,"edges":[]}}}}]},"gatekeepers":{"sf":true,"ld":true,"vl":true,"seo":true,"seoht":true,"2fac":true,"saa":true,"phone_qp":true},"knobs":{"acct:ntb":0,"cb":0,"captcha":0},"qe":{"form_navigation_dialog":{"g":"test","p":{"show_sign_in_navigation_dialog":"true"}},"cred_man":{"g":"","p":{}},"iab":{"g":"test","p":{"has_open_app_ios":"true"}},"app_upsell_li":{"g":"","p":{}},"app_upsell":{"g":"control_only_loggedout_upsell","p":{"has_only_app_upsell":"false","has_app_and_loggedout_upsell":"false"}},"stale_fix":{"g":"","p":{}},"dash_for_vod":{"g":"","p":{}},"profile_header_name":{"g":"","p":{}},"bc3l":{"g":"","p":{}},"direct_conversation_reporting":{"g":"","p":{}},"general_reporting":{"g":"","p":{}},"reporting":{"g":"","p":{}},"acc_recovery_link":{"g":"","p":{}},"notif":{"g":"","p":{}},"fb_unlink":{"g":"","p":{}},"mobile_stories_doodling":{"g":"","p":{}},"mobile_cancel":{"g":"","p":{}},"show_copy_link":{"g":"","p":{}},"mobile_logout":{"g":"","p":{}},"p_edit":{"g":"test","p":{"has_confirm_email":"true"}},"404_as_react":{"g":"","p":{}},"acc_recovery":{"g":"control_without_fb_login_02_09_18","p":{"has_fb_login_button":"false"}},"collections":{"g":"","p":{}},"comment_ta":{"g":"","p":{}},"su":{"g":"","p":{}},"disc_ppl":{"g":"","p":{}},"ebd_ul":{"g":"","p":{}},"ebdsim_li":{"g":"test_srcset","p":{"use_srcset":"true"}},"ebdsim_lo":{"g":"","p":{}},"empty_feed":{"g":"","p":{}},"bundles":{"g":"test_06_27","p":{"bundle_variant":"metro"}},"exit_story_creation":{"g":"","p":{}},"appsell":{"g":"","p":{}},"imgopt":{"g":"control","p":{}},"follow_button":{"g":"test","p":{"is_inline":"true"}},"loggedout":{"g":"test_follow_lists_06_05","p":{"can_open_follow":"true"}},"loggedout_upsell":{"g":"test_with_new_loggedout_upsell_content_03_15_18","p":{"has_new_loggedout_upsell_content":"true"}},"msisdn":{"g":"","p":{}},"bg_sync":{"g":"test","p":{"is_enabled":"true"}},"onetaplogin":{"g":"","p":{}},"login_poe":{"g":"","p":{}},"private_lo":{"g":"","p":{}},"profile_tabs":{"g":"","p":{}},"push_notifications":{"g":"","p":{}},"reg":{"g":"","p":{}},"reg_vp":{"g":"test_group_2","p":{"hide_value_prop":"true"}},"report_media":{"g":"","p":{}},"report_profile":{"g":"test","p":{"is_enabled":"true"}},"scroll_log":{"g":"","p":{}},"sidecar_swipe":{"g":"","p":{}},"su_universe":{"g":"","p":{}},"stale":{"g":"","p":{}},"stories_lo":{"g":"control_06_01","p":{"contextual_login":"false"}},"stories":{"g":"","p":{}},"tp_pblshr":{"g":"","p":{}},"video":{"g":"","p":{}},"gdpr_eu_tos":{"g":"","p":{}},"gdpr_row_tos":{"g":"test_05_01","p":{"tos_version":"row"}},"fd_gr":{"g":"","p":{}},"felix":{"g":"test","p":{"is_enabled":"true"}},"felix_clear_fb_cookie":{"g":"control","p":{"is_enabled":"true","blacklist":"fbsr_124024574287414"}},"felix_creation_duration_limits":{"g":"dogfooding","p":{"minimum_length_seconds":"15","maximum_length_seconds":"600"}},"felix_creation_enabled":{"g":"control","p":{"is_enabled":"true"}},"felix_creation_fb_crossposting":{"g":"control","p":{"is_enabled":"false"}},"felix_creation_fb_crossposting_v2":{"g":"control","p":{"is_enabled":"true"}},"felix_creation_validation":{"g":"control","p":{"edit_video_controls":"true","max_video_size_in_bytes":"3600000000","title_maximum_length":"75","description_maximum_length":"2200","valid_cover_mime_types":"image/jpeg,image/png","valid_video_mime_types":"video/mp4,video/quicktime","valid_video_extensions":"mp4,mov"}},"felix_creation_video_upload":{"g":"","p":{}},"felix_early_onboarding":{"g":"","p":{}},"pride":{"g":"","p":{}},"unfollow_confirm":{"g":"test","p":{"no_feed_unfollow":"true"}},"profile_enhance_li":{"g":"","p":{}},"profile_enhance_lo":{"g":"","p":{}},"phone_confirm":{"g":"","p":{}},"comment_enhance":{"g":"","p":{}},"mweb_media_chaining":{"g":"control","p":{"should_show_media_chaining":"false"}},"mweb_topical_explore":{"g":"","p":{}},"web_nametag":{"g":"","p":{}},"image_downgrade":{"g":"","p":{}},"image_downgrade_lite":{"g":"test","p":{"should_downgrade":"true"}},"follow_all_fb":{"g":"","p":{}},"lite_direct_upsell":{"g":"","p":{}},"web_loggedout_noop":{"g":"","p":{}},"stories_video_preload":{"g":"","p":{}},"lite_stories_video_preload":{"g":"test","p":{"disable_preload":"true"}},"a2hs_heuristic_uc":{"g":"","p":{}},"a2hs_heuristic_non_uc":{"g":"","p":{}},"web_hashtag":{"g":"","p":{}},"header_scroll":{"g":"","p":{}},"rout":{"g":"","p":{}},"websr":{"g":"search_results_only_08_13","p":{"has_rings_on_followers":"false","has_rings_on_disc_ppl":"false","has_rings_on_likers":"false","has_rings_on_followings":"false","has_rings_on_search_results":"true","has_rings_on_activity":"false"}},"web_lo_follow":{"g":"","p":{}},"web_share":{"g":"","p":{}},"lite_rating":{"g":"","p":{"is_enabled":"false"}},"web_embeds_share":{"g":"","p":{}},"web_share_lo":{"g":"","p":{}},"web_embeds_logged_out":{"g":"","p":{}},"sl":{"g":"test","p":{"show_logo":"true"}},"reg_nux":{"g":"","p":{}}},"hostname":"www.instagram.com","platform":"web","rhx_gis":"a409cac1b5c9d075bb386e195ecf9ff1","nonce":"jHGO8uaBhe9x5ZXFOAC6GQ==","zero_data":{},"rollout_hash":"7d2767d2f983","bundle_variant":"metro","probably_has_app":true}';

        $expected = [
                [
                    "display_url" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/6d3b23ae486c0a1f09b7137ef8f3f90e/5C0918BA/t51.2885-15/e35/39381489_420732498331428_3696641758545838080_n.jpg",
                    "thumbnails" => 
                        [
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/b9aa2baf11935a55065078559cfe9219/5C1B49F8/t51.2885-15/e35/s150x150/39381489_420732498331428_3696641758545838080_n.jpg",
                                    "config_width" => 150,
                                    "config_height" => 150,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/d4a5fa0fedfb8a563f707ee55593df5c/5BFA99B2/t51.2885-15/e35/s240x240/39381489_420732498331428_3696641758545838080_n.jpg",
                                    "config_width" => 240,
                                    "config_height" => 240,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7bc642b4ccd10b33dc3fb1d4ba496da/5BFB1908/t51.2885-15/e35/s320x320/39381489_420732498331428_3696641758545838080_n.jpg",
                                    "config_width" => 320,
                                    "config_height" => 320,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/e048c29d6193b840f8c5e605be1e9d8b/5C35A952/t51.2885-15/e35/s480x480/39381489_420732498331428_3696641758545838080_n.jpg",
                                    "config_width" => 480,
                                    "config_height" => 480,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7943aac381804d1184302b6f221c5a6/5BFCE15F/t51.2885-15/sh0.08/e35/s640x640/39381489_420732498331428_3696641758545838080_n.jpg",
                                    "config_width" => 640,
                                    "config_height" => 640,
                                ],
        
                        ],
                    "likes_count" => 16,
                    "comments_count" => 6,
                    "short_code" => "Bm2VIdXA5nO",
                    "dimensions" => 
                        [
                            "height" => 1080,
                            "width" => 1080,
                        ],
                    "caption" => "เอเชียทีคหน้าตรง ความงามของฝั่งเจ้าพระยาฝั่งตะวันออก วัฒนธรรมความเจริญบริเวณเลียบฝั่งแม่น้ำ จึงเป็นจุดท่องเที่ยวที่นิยมของชาวต่างประเทศ ;) #asiatique #bhumibolbridge #chaoprayariver",
                    "is_video" => false
                ],
                [
                    "display_url" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/58241dfa9418df02b7e95b2faada49eb/5C365682/t51.2885-15/e35/39334380_320104778564057_3376495330093694976_n.jpg",
                    "thumbnails" => 
                        [
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/a29772afeeaee0f99d92972696f32a59/5BFAFBC0/t51.2885-15/e35/s150x150/39334380_320104778564057_3376495330093694976_n.jpg",
                                    "config_width" => 150,
                                    "config_height" => 150,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/660db8ef0f9990827693b9afcff60707/5BFEAA8A/t51.2885-15/e35/s240x240/39334380_320104778564057_3376495330093694976_n.jpg",
                                    "config_width" => 240,
                                    "config_height" => 240,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/6d632993cc8102ad284e4f3696dbc31b/5C18AF30/t51.2885-15/e35/s320x320/39334380_320104778564057_3376495330093694976_n.jpg",
                                    "config_width" => 320,
                                    "config_height" => 320,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/e7431c70b1221897f06ec6066f1ea5f0/5C37C96A/t51.2885-15/e35/s480x480/39334380_320104778564057_3376495330093694976_n.jpg",
                                    "config_width" => 480,
                                    "config_height" => 480,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/efc55008112f6ce3d89e40c7dd13eb5b/5C07EA67/t51.2885-15/sh0.08/e35/s640x640/39334380_320104778564057_3376495330093694976_n.jpg",
                                    "config_width" => 640,
                                    "config_height" => 640,
                                ],
                        ],
                    "likes_count" => 2,
                    "comments_count" => 0,
                    "short_code" => "Bm1DRr4F8yr",
                    "dimensions" => 
                        [
                            "height" => 1080,
                            "width" => 1080,
                        ],
                    "caption" => "บางทีท้องฟ้าก็ดูกว้างไป #ท้องฟ้ากับเสาไฟ #bhumibolbridge #bangkok #twilight",
                    "is_video" => false
                ],
                [
                    "display_url" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/94f1baaa4a850e1f86fab8b7a26c2109/5C1C3D1D/t51.2885-15/e35/39337324_996624327181364_8478193634745778176_n.jpg",
                    "thumbnails" => 
                        [
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/f5bb75af927b8e255812410c06803cbb/5C1D6DE8/t51.2885-15/e35/c120.0.480.480/s150x150/39337324_996624327181364_8478193634745778176_n.jpg",
                                    "config_width" => 150,
                                    "config_height" => 150,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/4d4e6602ddb8bbd6e8f9578b8565df09/5C3AA5A2/t51.2885-15/e35/c120.0.480.480/s240x240/39337324_996624327181364_8478193634745778176_n.jpg",
                                    "config_width" => 240,
                                    "config_height" => 240,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/bcef364c65d75ff79dc018f3aefd228c/5C16CE18/t51.2885-15/e35/c120.0.480.480/s320x320/39337324_996624327181364_8478193634745778176_n.jpg",
                                    "config_width" => 320,
                                    "config_height" => 320,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg",
                                    "config_width" => 480,
                                    "config_height" => 480,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg",
                                    "config_width" => 640,
                                    "config_height" => 640,
                                ],
        
                        ],
                    "likes_count" => 19,
                    "comments_count" => 0,
                    "short_code" => "Bm0HxBFlp8N",
                    "dimensions" => 
                        [
                            "height" => 500,
                            "width" => 750,
                        ],
                    "caption" => "ที่นี่พระประแดง \nThere's no place like home.\n#phrapradaeng #pier #bridge #boat #bhumibolbridge #river #greenlung",
                    "is_video" => false
                ],
                [
                    "display_url" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/9ea4b508ea478ef3708fa9581f6bd948/5C1C8B6D/t51.2885-15/e35/39835919_2086052055056997_2157845299551272960_n.jpg",
                    "thumbnails" => 
                        [
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/628f39cae12a0de00952ec4343415fd4/5C1C4852/t51.2885-15/e35/s150x150/39835919_2086052055056997_2157845299551272960_n.jpg",
                                    "config_width" => 150,
                                    "config_height" => 150,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/f24bd0f90d8ecfd6d7fae519e6958fa1/5BFD9F54/t51.2885-15/e35/s240x240/39835919_2086052055056997_2157845299551272960_n.jpg",
                                    "config_width" => 240,
                                    "config_height" => 240,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/c56ff3c4c2a62e32e23fc7f9269b47f1/5C375A2A/t51.2885-15/e35/s320x320/39835919_2086052055056997_2157845299551272960_n.jpg",
                                    "config_width" => 320,
                                    "config_height" => 320,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/7bb1b53080b50b40c6a767acad0fc232/5C37C36D/t51.2885-15/e35/s480x480/39835919_2086052055056997_2157845299551272960_n.jpg",
                                    "config_width" => 480,
                                    "config_height" => 480,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/dc0b46d50e88f781eacb4636aa2a03cb/5BF6ACD7/t51.2885-15/sh0.08/e35/s640x640/39835919_2086052055056997_2157845299551272960_n.jpg",
                                    "config_width" => 640,
                                    "config_height" => 640,
                                ],
                        ],
                    "likes_count" => 9,
                    "comments_count" => 2,
                    "short_code" => "BmzqfcJAafA",
                    "dimensions" => 
                        [
                            "height" => 1080,
                            "width" => 1080,
                        ],
                    "caption" => "หลังเบลอหน้าก็เบลอ ;; ง่วงนอน\n#bhumibolbridge #watdan",
                    "is_video" => false
                ],
                [
                    "display_url" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/429583bbb03f5bb4009f3cfbd584e468/5C0938FB/t51.2885-15/e35/39494034_697909037236396_5157876872020754432_n.jpg",
                    "thumbnails" => 
                        [
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/c1e0f685d65b024832dafade52114307/5C1A1EFA/t51.2885-15/e35/c181.0.717.717/s150x150/39494034_697909037236396_5157876872020754432_n.jpg",
                                    "config_width" => 150,
                                    "config_height" => 150,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/6ed1a0fc784fa5c51bf0639210d6a120/5C35BDB0/t51.2885-15/e35/c181.0.717.717/s240x240/39494034_697909037236396_5157876872020754432_n.jpg",
                                    "config_width" => 240,
                                    "config_height" => 240,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/60e7b1002b300fc548212b584c23f0b2/5BFC320A/t51.2885-15/e35/c181.0.717.717/s320x320/39494034_697909037236396_5157876872020754432_n.jpg",
                                    "config_width" => 320,
                                    "config_height" => 320,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/eed4b3b7f52536efbb5285c33e1c8f6d/5C0A8950/t51.2885-15/e35/c181.0.717.717/s480x480/39494034_697909037236396_5157876872020754432_n.jpg",
                                    "config_width" => 480,
                                    "config_height" => 480,
                                ],
                                [
                                    "src" => "https://instagram.fbkk8-2.fna.fbcdn.net/vp/dcbe9dcc16fa4f8d1ec33767fd0a12e9/5C0974F0/t51.2885-15/sh0.08/e35/c181.0.717.717/s640x640/39494034_697909037236396_5157876872020754432_n.jpg",
                                    "config_width" => 640,
                                    "config_height" => 640,
                                ],
                        ],
                    "likes_count" => 164,
                    "comments_count" => 10,
                    "short_code" => "BmvayNkljgV",
                    "dimensions" => 
                        [
                            "height" => 717,
                            "width" => 1080,
                        ],
                    "caption" => "Bhumibol Bridge and Klong Lad Pho Flood Gate at Dusk, Samutprakarn Province.\n-\n-\nView from Chao Praya River at Bangkok side.",
                    "is_video" => false
                ],
            ];

        $scraper = new TagScraper();
        $tags = $scraper->parse($content);

        $this->assertEquals(5, count($tags));
    }

    public function testFilterVideo() {
        $content = 'window._sharedData = {"activity_counts":{"comment_likes":0,"comments":0,"likes":0,"relationships":0,"usertags":0},"config":{"csrf_token":"A1c74NuZYHUTTW5JfwWTNfXn9Z0wmh1x","viewer":{"allow_contacts_sync":false,"biography":"programmer, traveller, runner, hiker, photographer","external_url":"http://www.chonla.com/","full_name":"chonla","has_profile_pic":true,"id":"30727014","profile_pic_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e8640bd09eac350e0d612e5bca035eaa/5C1C46E0/t51.2885-19/11351647_537729729713576_2100710552_a.jpg","profile_pic_url_hd":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e8640bd09eac350e0d612e5bca035eaa/5C1C46E0/t51.2885-19/11351647_537729729713576_2100710552_a.jpg","username":"chonlagram"}},"supports_es6":true,"country_code":"TH","language_code":"en","locale":"en_US","entry_data":{"TagPage":[{"graphql":{"hashtag":{"id":"17841562705100603","name":"bhumibolbridge","is_following":false,"is_top_media_only":false,"profile_pic_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/5463a94d1b83e7401dbbb9fcbaadb3cb/5C168B37/t51.2885-15/e35/c0.134.1080.1080/s150x150/38905494_1917965828260543_2962362415771025408_n.jpg","edge_hashtag_to_media":{"count":2430,"page_info":{"has_next_page":true,"end_cursor":"AQBPr828ssCS2lLObcfWzK0qbDtjWAb6mku1VC9A52-I1uWLE7RkMrNk5jtkePmNROwwq-PlN3kCuPX_u-fZho9oUpT43rUHsKOnrrxepQr2GQ"},"edges":[{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852761236966709710","edge_media_to_caption":{"edges":[{"node":{"text":"เอเชียทีคหน้าตรง ความงามของฝั่งเจ้าพระยาฝั่งตะวันออก วัฒนธรรมความเจริญบริเวณเลียบฝั่งแม่น้ำ จึงเป็นจุดท่องเที่ยวที่นิยมของชาวต่างประเทศ #asiatique #bhumibolbridge #chaoprayariver"}}]},"shortcode":"Bm2VIdXA5nO","edge_media_to_comment":{"count":6},"taken_at_timestamp":1535086372,"dimensions":{"height":1080,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/6d3b23ae486c0a1f09b7137ef8f3f90e/5C0918BA/t51.2885-15/e35/39381489_420732498331428_3696641758545838080_n.jpg","edge_liked_by":{"count":16},"edge_media_preview_like":{"count":16},"owner":{"id":"198351430"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7943aac381804d1184302b6f221c5a6/5BFCE15F/t51.2885-15/sh0.08/e35/s640x640/39381489_420732498331428_3696641758545838080_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b9aa2baf11935a55065078559cfe9219/5C1B49F8/t51.2885-15/e35/s150x150/39381489_420732498331428_3696641758545838080_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d4a5fa0fedfb8a563f707ee55593df5c/5BFA99B2/t51.2885-15/e35/s240x240/39381489_420732498331428_3696641758545838080_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7bc642b4ccd10b33dc3fb1d4ba496da/5BFB1908/t51.2885-15/e35/s320x320/39381489_420732498331428_3696641758545838080_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e048c29d6193b840f8c5e605be1e9d8b/5C35A952/t51.2885-15/e35/s480x480/39381489_420732498331428_3696641758545838080_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7943aac381804d1184302b6f221c5a6/5BFCE15F/t51.2885-15/sh0.08/e35/s640x640/39381489_420732498331428_3696641758545838080_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852401231215447211","edge_media_to_caption":{"edges":[{"node":{"text":"บางทีท้องฟ้าก็ดูกว้างไป #ท้องฟ้ากับเสาไฟ #bhumibolbridge #bangkok #twilight"}}]},"shortcode":"Bm1DRr4F8yr","edge_media_to_comment":{"count":0},"taken_at_timestamp":1535043456,"dimensions":{"height":1080,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/58241dfa9418df02b7e95b2faada49eb/5C365682/t51.2885-15/e35/39334380_320104778564057_3376495330093694976_n.jpg","edge_liked_by":{"count":2},"edge_media_preview_like":{"count":2},"owner":{"id":"12002500"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/efc55008112f6ce3d89e40c7dd13eb5b/5C07EA67/t51.2885-15/sh0.08/e35/s640x640/39334380_320104778564057_3376495330093694976_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/a29772afeeaee0f99d92972696f32a59/5BFAFBC0/t51.2885-15/e35/s150x150/39334380_320104778564057_3376495330093694976_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/660db8ef0f9990827693b9afcff60707/5BFEAA8A/t51.2885-15/e35/s240x240/39334380_320104778564057_3376495330093694976_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/6d632993cc8102ad284e4f3696dbc31b/5C18AF30/t51.2885-15/e35/s320x320/39334380_320104778564057_3376495330093694976_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e7431c70b1221897f06ec6066f1ea5f0/5C37C96A/t51.2885-15/e35/s480x480/39334380_320104778564057_3376495330093694976_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/efc55008112f6ce3d89e40c7dd13eb5b/5C07EA67/t51.2885-15/sh0.08/e35/s640x640/39334380_320104778564057_3376495330093694976_n.jpg","config_width":640,"config_height":640}],"is_video":true,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852139501503553293","edge_media_to_caption":{"edges":[{"node":{"text":"ที่นี่พระประแดง \nThere\'s no place like home.\n#phrapradaeng #pier #bridge #boat #bhumibolbridge #river #greenlung"}}]},"shortcode":"Bm0HxBFlp8N","edge_media_to_comment":{"count":0},"taken_at_timestamp":1535012255,"dimensions":{"height":500,"width":750},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/94f1baaa4a850e1f86fab8b7a26c2109/5C1C3D1D/t51.2885-15/e35/39337324_996624327181364_8478193634745778176_n.jpg","edge_liked_by":{"count":19},"edge_media_preview_like":{"count":19},"owner":{"id":"1423837820"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/f5bb75af927b8e255812410c06803cbb/5C1D6DE8/t51.2885-15/e35/c120.0.480.480/s150x150/39337324_996624327181364_8478193634745778176_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/4d4e6602ddb8bbd6e8f9578b8565df09/5C3AA5A2/t51.2885-15/e35/c120.0.480.480/s240x240/39337324_996624327181364_8478193634745778176_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/bcef364c65d75ff79dc018f3aefd228c/5C16CE18/t51.2885-15/e35/c120.0.480.480/s320x320/39337324_996624327181364_8478193634745778176_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852010750252525504","edge_media_to_caption":{"edges":[{"node":{"text":"หลังเบลอหน้าก็เบลอ ง่วงนอน\n#bhumibolbridge #watdan"}}]},"shortcode":"BmzqfcJAafA","edge_media_to_comment":{"count":2},"taken_at_timestamp":1534996907,"dimensions":{"height":1080,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/9ea4b508ea478ef3708fa9581f6bd948/5C1C8B6D/t51.2885-15/e35/39835919_2086052055056997_2157845299551272960_n.jpg","edge_liked_by":{"count":9},"edge_media_preview_like":{"count":9},"owner":{"id":"1393172596"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dc0b46d50e88f781eacb4636aa2a03cb/5BF6ACD7/t51.2885-15/sh0.08/e35/s640x640/39835919_2086052055056997_2157845299551272960_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/628f39cae12a0de00952ec4343415fd4/5C1C4852/t51.2885-15/e35/s150x150/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/f24bd0f90d8ecfd6d7fae519e6958fa1/5BFD9F54/t51.2885-15/e35/s240x240/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/c56ff3c4c2a62e32e23fc7f9269b47f1/5C375A2A/t51.2885-15/e35/s320x320/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/7bb1b53080b50b40c6a767acad0fc232/5C37C36D/t51.2885-15/e35/s480x480/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dc0b46d50e88f781eacb4636aa2a03cb/5BF6ACD7/t51.2885-15/sh0.08/e35/s640x640/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1850815771628156949","edge_media_to_caption":{"edges":[{"node":{"text":"Bhumibol Bridge and Klong Lad Pho Flood Gate at Dusk, Samutprakarn Province.\n-\n-\nView from Chao Praya River at Bangkok side."}}]},"shortcode":"BmvayNkljgV","edge_media_to_comment":{"count":10},"taken_at_timestamp":1534854454,"dimensions":{"height":717,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/429583bbb03f5bb4009f3cfbd584e468/5C0938FB/t51.2885-15/e35/39494034_697909037236396_5157876872020754432_n.jpg","edge_liked_by":{"count":164},"edge_media_preview_like":{"count":164},"owner":{"id":"2566444"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dcbe9dcc16fa4f8d1ec33767fd0a12e9/5C0974F0/t51.2885-15/sh0.08/e35/c181.0.717.717/s640x640/39494034_697909037236396_5157876872020754432_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/c1e0f685d65b024832dafade52114307/5C1A1EFA/t51.2885-15/e35/c181.0.717.717/s150x150/39494034_697909037236396_5157876872020754432_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/6ed1a0fc784fa5c51bf0639210d6a120/5C35BDB0/t51.2885-15/e35/c181.0.717.717/s240x240/39494034_697909037236396_5157876872020754432_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/60e7b1002b300fc548212b584c23f0b2/5BFC320A/t51.2885-15/e35/c181.0.717.717/s320x320/39494034_697909037236396_5157876872020754432_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/eed4b3b7f52536efbb5285c33e1c8f6d/5C0A8950/t51.2885-15/e35/c181.0.717.717/s480x480/39494034_697909037236396_5157876872020754432_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dcbe9dcc16fa4f8d1ec33767fd0a12e9/5C0974F0/t51.2885-15/sh0.08/e35/c181.0.717.717/s640x640/39494034_697909037236396_5157876872020754432_n.jpg","config_width":640,"config_height":640}],"is_video":true,"accessibility_caption":null}}]},"edge_hashtag_to_content_advisory":{"count":0,"edges":[]}}}}]},"gatekeepers":{"sf":true,"ld":true,"vl":true,"seo":true,"seoht":true,"2fac":true,"saa":true,"phone_qp":true},"knobs":{"acct:ntb":0,"cb":0,"captcha":0},"qe":{"form_navigation_dialog":{"g":"test","p":{"show_sign_in_navigation_dialog":"true"}},"cred_man":{"g":"","p":{}},"iab":{"g":"test","p":{"has_open_app_ios":"true"}},"app_upsell_li":{"g":"","p":{}},"app_upsell":{"g":"control_only_loggedout_upsell","p":{"has_only_app_upsell":"false","has_app_and_loggedout_upsell":"false"}},"stale_fix":{"g":"","p":{}},"dash_for_vod":{"g":"","p":{}},"profile_header_name":{"g":"","p":{}},"bc3l":{"g":"","p":{}},"direct_conversation_reporting":{"g":"","p":{}},"general_reporting":{"g":"","p":{}},"reporting":{"g":"","p":{}},"acc_recovery_link":{"g":"","p":{}},"notif":{"g":"","p":{}},"fb_unlink":{"g":"","p":{}},"mobile_stories_doodling":{"g":"","p":{}},"mobile_cancel":{"g":"","p":{}},"show_copy_link":{"g":"","p":{}},"mobile_logout":{"g":"","p":{}},"p_edit":{"g":"test","p":{"has_confirm_email":"true"}},"404_as_react":{"g":"","p":{}},"acc_recovery":{"g":"control_without_fb_login_02_09_18","p":{"has_fb_login_button":"false"}},"collections":{"g":"","p":{}},"comment_ta":{"g":"","p":{}},"su":{"g":"","p":{}},"disc_ppl":{"g":"","p":{}},"ebd_ul":{"g":"","p":{}},"ebdsim_li":{"g":"test_srcset","p":{"use_srcset":"true"}},"ebdsim_lo":{"g":"","p":{}},"empty_feed":{"g":"","p":{}},"bundles":{"g":"test_06_27","p":{"bundle_variant":"metro"}},"exit_story_creation":{"g":"","p":{}},"appsell":{"g":"","p":{}},"imgopt":{"g":"control","p":{}},"follow_button":{"g":"test","p":{"is_inline":"true"}},"loggedout":{"g":"test_follow_lists_06_05","p":{"can_open_follow":"true"}},"loggedout_upsell":{"g":"test_with_new_loggedout_upsell_content_03_15_18","p":{"has_new_loggedout_upsell_content":"true"}},"msisdn":{"g":"","p":{}},"bg_sync":{"g":"test","p":{"is_enabled":"true"}},"onetaplogin":{"g":"","p":{}},"login_poe":{"g":"","p":{}},"private_lo":{"g":"","p":{}},"profile_tabs":{"g":"","p":{}},"push_notifications":{"g":"","p":{}},"reg":{"g":"","p":{}},"reg_vp":{"g":"test_group_2","p":{"hide_value_prop":"true"}},"report_media":{"g":"","p":{}},"report_profile":{"g":"test","p":{"is_enabled":"true"}},"scroll_log":{"g":"","p":{}},"sidecar_swipe":{"g":"","p":{}},"su_universe":{"g":"","p":{}},"stale":{"g":"","p":{}},"stories_lo":{"g":"control_06_01","p":{"contextual_login":"false"}},"stories":{"g":"","p":{}},"tp_pblshr":{"g":"","p":{}},"video":{"g":"","p":{}},"gdpr_eu_tos":{"g":"","p":{}},"gdpr_row_tos":{"g":"test_05_01","p":{"tos_version":"row"}},"fd_gr":{"g":"","p":{}},"felix":{"g":"test","p":{"is_enabled":"true"}},"felix_clear_fb_cookie":{"g":"control","p":{"is_enabled":"true","blacklist":"fbsr_124024574287414"}},"felix_creation_duration_limits":{"g":"dogfooding","p":{"minimum_length_seconds":"15","maximum_length_seconds":"600"}},"felix_creation_enabled":{"g":"control","p":{"is_enabled":"true"}},"felix_creation_fb_crossposting":{"g":"control","p":{"is_enabled":"false"}},"felix_creation_fb_crossposting_v2":{"g":"control","p":{"is_enabled":"true"}},"felix_creation_validation":{"g":"control","p":{"edit_video_controls":"true","max_video_size_in_bytes":"3600000000","title_maximum_length":"75","description_maximum_length":"2200","valid_cover_mime_types":"image/jpeg,image/png","valid_video_mime_types":"video/mp4,video/quicktime","valid_video_extensions":"mp4,mov"}},"felix_creation_video_upload":{"g":"","p":{}},"felix_early_onboarding":{"g":"","p":{}},"pride":{"g":"","p":{}},"unfollow_confirm":{"g":"test","p":{"no_feed_unfollow":"true"}},"profile_enhance_li":{"g":"","p":{}},"profile_enhance_lo":{"g":"","p":{}},"phone_confirm":{"g":"","p":{}},"comment_enhance":{"g":"","p":{}},"mweb_media_chaining":{"g":"control","p":{"should_show_media_chaining":"false"}},"mweb_topical_explore":{"g":"","p":{}},"web_nametag":{"g":"","p":{}},"image_downgrade":{"g":"","p":{}},"image_downgrade_lite":{"g":"test","p":{"should_downgrade":"true"}},"follow_all_fb":{"g":"","p":{}},"lite_direct_upsell":{"g":"","p":{}},"web_loggedout_noop":{"g":"","p":{}},"stories_video_preload":{"g":"","p":{}},"lite_stories_video_preload":{"g":"test","p":{"disable_preload":"true"}},"a2hs_heuristic_uc":{"g":"","p":{}},"a2hs_heuristic_non_uc":{"g":"","p":{}},"web_hashtag":{"g":"","p":{}},"header_scroll":{"g":"","p":{}},"rout":{"g":"","p":{}},"websr":{"g":"search_results_only_08_13","p":{"has_rings_on_followers":"false","has_rings_on_disc_ppl":"false","has_rings_on_likers":"false","has_rings_on_followings":"false","has_rings_on_search_results":"true","has_rings_on_activity":"false"}},"web_lo_follow":{"g":"","p":{}},"web_share":{"g":"","p":{}},"lite_rating":{"g":"","p":{"is_enabled":"false"}},"web_embeds_share":{"g":"","p":{}},"web_share_lo":{"g":"","p":{}},"web_embeds_logged_out":{"g":"","p":{}},"sl":{"g":"test","p":{"show_logo":"true"}},"reg_nux":{"g":"","p":{}}},"hostname":"www.instagram.com","platform":"web","rhx_gis":"a409cac1b5c9d075bb386e195ecf9ff1","nonce":"jHGO8uaBhe9x5ZXFOAC6GQ==","zero_data":{},"rollout_hash":"7d2767d2f983","bundle_variant":"metro","probably_has_app":true}';

        $mock = $this->getMockBuilder(InstagramScraper\Scraper::class)
                     ->setMethods(['scrape'])
                     ->getMock();

        $mock->expects($this->any())
             ->method('scrape')
             ->will($this->returnValue($content));

        $scraper = new TagScraper($mock);
        $tags = $scraper->scrape('snail', TagScraper::VIDEOS);

        $this->assertEquals(2, count($tags));
    }

    public function testFilterImage() {
        $content = 'window._sharedData = {"activity_counts":{"comment_likes":0,"comments":0,"likes":0,"relationships":0,"usertags":0},"config":{"csrf_token":"A1c74NuZYHUTTW5JfwWTNfXn9Z0wmh1x","viewer":{"allow_contacts_sync":false,"biography":"programmer, traveller, runner, hiker, photographer","external_url":"http://www.chonla.com/","full_name":"chonla","has_profile_pic":true,"id":"30727014","profile_pic_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e8640bd09eac350e0d612e5bca035eaa/5C1C46E0/t51.2885-19/11351647_537729729713576_2100710552_a.jpg","profile_pic_url_hd":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e8640bd09eac350e0d612e5bca035eaa/5C1C46E0/t51.2885-19/11351647_537729729713576_2100710552_a.jpg","username":"chonlagram"}},"supports_es6":true,"country_code":"TH","language_code":"en","locale":"en_US","entry_data":{"TagPage":[{"graphql":{"hashtag":{"id":"17841562705100603","name":"bhumibolbridge","is_following":false,"is_top_media_only":false,"profile_pic_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/5463a94d1b83e7401dbbb9fcbaadb3cb/5C168B37/t51.2885-15/e35/c0.134.1080.1080/s150x150/38905494_1917965828260543_2962362415771025408_n.jpg","edge_hashtag_to_media":{"count":2430,"page_info":{"has_next_page":true,"end_cursor":"AQBPr828ssCS2lLObcfWzK0qbDtjWAb6mku1VC9A52-I1uWLE7RkMrNk5jtkePmNROwwq-PlN3kCuPX_u-fZho9oUpT43rUHsKOnrrxepQr2GQ"},"edges":[{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852761236966709710","edge_media_to_caption":{"edges":[{"node":{"text":"เอเชียทีคหน้าตรง ความงามของฝั่งเจ้าพระยาฝั่งตะวันออก วัฒนธรรมความเจริญบริเวณเลียบฝั่งแม่น้ำ จึงเป็นจุดท่องเที่ยวที่นิยมของชาวต่างประเทศ #asiatique #bhumibolbridge #chaoprayariver"}}]},"shortcode":"Bm2VIdXA5nO","edge_media_to_comment":{"count":6},"taken_at_timestamp":1535086372,"dimensions":{"height":1080,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/6d3b23ae486c0a1f09b7137ef8f3f90e/5C0918BA/t51.2885-15/e35/39381489_420732498331428_3696641758545838080_n.jpg","edge_liked_by":{"count":16},"edge_media_preview_like":{"count":16},"owner":{"id":"198351430"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7943aac381804d1184302b6f221c5a6/5BFCE15F/t51.2885-15/sh0.08/e35/s640x640/39381489_420732498331428_3696641758545838080_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b9aa2baf11935a55065078559cfe9219/5C1B49F8/t51.2885-15/e35/s150x150/39381489_420732498331428_3696641758545838080_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d4a5fa0fedfb8a563f707ee55593df5c/5BFA99B2/t51.2885-15/e35/s240x240/39381489_420732498331428_3696641758545838080_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7bc642b4ccd10b33dc3fb1d4ba496da/5BFB1908/t51.2885-15/e35/s320x320/39381489_420732498331428_3696641758545838080_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e048c29d6193b840f8c5e605be1e9d8b/5C35A952/t51.2885-15/e35/s480x480/39381489_420732498331428_3696641758545838080_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/d7943aac381804d1184302b6f221c5a6/5BFCE15F/t51.2885-15/sh0.08/e35/s640x640/39381489_420732498331428_3696641758545838080_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852401231215447211","edge_media_to_caption":{"edges":[{"node":{"text":"บางทีท้องฟ้าก็ดูกว้างไป #ท้องฟ้ากับเสาไฟ #bhumibolbridge #bangkok #twilight"}}]},"shortcode":"Bm1DRr4F8yr","edge_media_to_comment":{"count":0},"taken_at_timestamp":1535043456,"dimensions":{"height":1080,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/58241dfa9418df02b7e95b2faada49eb/5C365682/t51.2885-15/e35/39334380_320104778564057_3376495330093694976_n.jpg","edge_liked_by":{"count":2},"edge_media_preview_like":{"count":2},"owner":{"id":"12002500"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/efc55008112f6ce3d89e40c7dd13eb5b/5C07EA67/t51.2885-15/sh0.08/e35/s640x640/39334380_320104778564057_3376495330093694976_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/a29772afeeaee0f99d92972696f32a59/5BFAFBC0/t51.2885-15/e35/s150x150/39334380_320104778564057_3376495330093694976_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/660db8ef0f9990827693b9afcff60707/5BFEAA8A/t51.2885-15/e35/s240x240/39334380_320104778564057_3376495330093694976_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/6d632993cc8102ad284e4f3696dbc31b/5C18AF30/t51.2885-15/e35/s320x320/39334380_320104778564057_3376495330093694976_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/e7431c70b1221897f06ec6066f1ea5f0/5C37C96A/t51.2885-15/e35/s480x480/39334380_320104778564057_3376495330093694976_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/efc55008112f6ce3d89e40c7dd13eb5b/5C07EA67/t51.2885-15/sh0.08/e35/s640x640/39334380_320104778564057_3376495330093694976_n.jpg","config_width":640,"config_height":640}],"is_video":true,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852139501503553293","edge_media_to_caption":{"edges":[{"node":{"text":"ที่นี่พระประแดง \nThere\'s no place like home.\n#phrapradaeng #pier #bridge #boat #bhumibolbridge #river #greenlung"}}]},"shortcode":"Bm0HxBFlp8N","edge_media_to_comment":{"count":0},"taken_at_timestamp":1535012255,"dimensions":{"height":500,"width":750},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/94f1baaa4a850e1f86fab8b7a26c2109/5C1C3D1D/t51.2885-15/e35/39337324_996624327181364_8478193634745778176_n.jpg","edge_liked_by":{"count":19},"edge_media_preview_like":{"count":19},"owner":{"id":"1423837820"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/f5bb75af927b8e255812410c06803cbb/5C1D6DE8/t51.2885-15/e35/c120.0.480.480/s150x150/39337324_996624327181364_8478193634745778176_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/4d4e6602ddb8bbd6e8f9578b8565df09/5C3AA5A2/t51.2885-15/e35/c120.0.480.480/s240x240/39337324_996624327181364_8478193634745778176_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/bcef364c65d75ff79dc018f3aefd228c/5C16CE18/t51.2885-15/e35/c120.0.480.480/s320x320/39337324_996624327181364_8478193634745778176_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/b8ec6aefcb717f4e43cf0bf465adc2dd/5C350846/t51.2885-15/e35/c120.0.480.480/39337324_996624327181364_8478193634745778176_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1852010750252525504","edge_media_to_caption":{"edges":[{"node":{"text":"หลังเบลอหน้าก็เบลอ ง่วงนอน\n#bhumibolbridge #watdan"}}]},"shortcode":"BmzqfcJAafA","edge_media_to_comment":{"count":2},"taken_at_timestamp":1534996907,"dimensions":{"height":1080,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/9ea4b508ea478ef3708fa9581f6bd948/5C1C8B6D/t51.2885-15/e35/39835919_2086052055056997_2157845299551272960_n.jpg","edge_liked_by":{"count":9},"edge_media_preview_like":{"count":9},"owner":{"id":"1393172596"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dc0b46d50e88f781eacb4636aa2a03cb/5BF6ACD7/t51.2885-15/sh0.08/e35/s640x640/39835919_2086052055056997_2157845299551272960_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/628f39cae12a0de00952ec4343415fd4/5C1C4852/t51.2885-15/e35/s150x150/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/f24bd0f90d8ecfd6d7fae519e6958fa1/5BFD9F54/t51.2885-15/e35/s240x240/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/c56ff3c4c2a62e32e23fc7f9269b47f1/5C375A2A/t51.2885-15/e35/s320x320/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/7bb1b53080b50b40c6a767acad0fc232/5C37C36D/t51.2885-15/e35/s480x480/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dc0b46d50e88f781eacb4636aa2a03cb/5BF6ACD7/t51.2885-15/sh0.08/e35/s640x640/39835919_2086052055056997_2157845299551272960_n.jpg","config_width":640,"config_height":640}],"is_video":false,"accessibility_caption":null}},{"node":{"comments_disabled":false,"__typename":"GraphImage","id":"1850815771628156949","edge_media_to_caption":{"edges":[{"node":{"text":"Bhumibol Bridge and Klong Lad Pho Flood Gate at Dusk, Samutprakarn Province.\n-\n-\nView from Chao Praya River at Bangkok side."}}]},"shortcode":"BmvayNkljgV","edge_media_to_comment":{"count":10},"taken_at_timestamp":1534854454,"dimensions":{"height":717,"width":1080},"display_url":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/429583bbb03f5bb4009f3cfbd584e468/5C0938FB/t51.2885-15/e35/39494034_697909037236396_5157876872020754432_n.jpg","edge_liked_by":{"count":164},"edge_media_preview_like":{"count":164},"owner":{"id":"2566444"},"thumbnail_src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dcbe9dcc16fa4f8d1ec33767fd0a12e9/5C0974F0/t51.2885-15/sh0.08/e35/c181.0.717.717/s640x640/39494034_697909037236396_5157876872020754432_n.jpg","thumbnail_resources":[{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/c1e0f685d65b024832dafade52114307/5C1A1EFA/t51.2885-15/e35/c181.0.717.717/s150x150/39494034_697909037236396_5157876872020754432_n.jpg","config_width":150,"config_height":150},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/6ed1a0fc784fa5c51bf0639210d6a120/5C35BDB0/t51.2885-15/e35/c181.0.717.717/s240x240/39494034_697909037236396_5157876872020754432_n.jpg","config_width":240,"config_height":240},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/60e7b1002b300fc548212b584c23f0b2/5BFC320A/t51.2885-15/e35/c181.0.717.717/s320x320/39494034_697909037236396_5157876872020754432_n.jpg","config_width":320,"config_height":320},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/eed4b3b7f52536efbb5285c33e1c8f6d/5C0A8950/t51.2885-15/e35/c181.0.717.717/s480x480/39494034_697909037236396_5157876872020754432_n.jpg","config_width":480,"config_height":480},{"src":"https://instagram.fbkk8-2.fna.fbcdn.net/vp/dcbe9dcc16fa4f8d1ec33767fd0a12e9/5C0974F0/t51.2885-15/sh0.08/e35/c181.0.717.717/s640x640/39494034_697909037236396_5157876872020754432_n.jpg","config_width":640,"config_height":640}],"is_video":true,"accessibility_caption":null}}]},"edge_hashtag_to_content_advisory":{"count":0,"edges":[]}}}}]},"gatekeepers":{"sf":true,"ld":true,"vl":true,"seo":true,"seoht":true,"2fac":true,"saa":true,"phone_qp":true},"knobs":{"acct:ntb":0,"cb":0,"captcha":0},"qe":{"form_navigation_dialog":{"g":"test","p":{"show_sign_in_navigation_dialog":"true"}},"cred_man":{"g":"","p":{}},"iab":{"g":"test","p":{"has_open_app_ios":"true"}},"app_upsell_li":{"g":"","p":{}},"app_upsell":{"g":"control_only_loggedout_upsell","p":{"has_only_app_upsell":"false","has_app_and_loggedout_upsell":"false"}},"stale_fix":{"g":"","p":{}},"dash_for_vod":{"g":"","p":{}},"profile_header_name":{"g":"","p":{}},"bc3l":{"g":"","p":{}},"direct_conversation_reporting":{"g":"","p":{}},"general_reporting":{"g":"","p":{}},"reporting":{"g":"","p":{}},"acc_recovery_link":{"g":"","p":{}},"notif":{"g":"","p":{}},"fb_unlink":{"g":"","p":{}},"mobile_stories_doodling":{"g":"","p":{}},"mobile_cancel":{"g":"","p":{}},"show_copy_link":{"g":"","p":{}},"mobile_logout":{"g":"","p":{}},"p_edit":{"g":"test","p":{"has_confirm_email":"true"}},"404_as_react":{"g":"","p":{}},"acc_recovery":{"g":"control_without_fb_login_02_09_18","p":{"has_fb_login_button":"false"}},"collections":{"g":"","p":{}},"comment_ta":{"g":"","p":{}},"su":{"g":"","p":{}},"disc_ppl":{"g":"","p":{}},"ebd_ul":{"g":"","p":{}},"ebdsim_li":{"g":"test_srcset","p":{"use_srcset":"true"}},"ebdsim_lo":{"g":"","p":{}},"empty_feed":{"g":"","p":{}},"bundles":{"g":"test_06_27","p":{"bundle_variant":"metro"}},"exit_story_creation":{"g":"","p":{}},"appsell":{"g":"","p":{}},"imgopt":{"g":"control","p":{}},"follow_button":{"g":"test","p":{"is_inline":"true"}},"loggedout":{"g":"test_follow_lists_06_05","p":{"can_open_follow":"true"}},"loggedout_upsell":{"g":"test_with_new_loggedout_upsell_content_03_15_18","p":{"has_new_loggedout_upsell_content":"true"}},"msisdn":{"g":"","p":{}},"bg_sync":{"g":"test","p":{"is_enabled":"true"}},"onetaplogin":{"g":"","p":{}},"login_poe":{"g":"","p":{}},"private_lo":{"g":"","p":{}},"profile_tabs":{"g":"","p":{}},"push_notifications":{"g":"","p":{}},"reg":{"g":"","p":{}},"reg_vp":{"g":"test_group_2","p":{"hide_value_prop":"true"}},"report_media":{"g":"","p":{}},"report_profile":{"g":"test","p":{"is_enabled":"true"}},"scroll_log":{"g":"","p":{}},"sidecar_swipe":{"g":"","p":{}},"su_universe":{"g":"","p":{}},"stale":{"g":"","p":{}},"stories_lo":{"g":"control_06_01","p":{"contextual_login":"false"}},"stories":{"g":"","p":{}},"tp_pblshr":{"g":"","p":{}},"video":{"g":"","p":{}},"gdpr_eu_tos":{"g":"","p":{}},"gdpr_row_tos":{"g":"test_05_01","p":{"tos_version":"row"}},"fd_gr":{"g":"","p":{}},"felix":{"g":"test","p":{"is_enabled":"true"}},"felix_clear_fb_cookie":{"g":"control","p":{"is_enabled":"true","blacklist":"fbsr_124024574287414"}},"felix_creation_duration_limits":{"g":"dogfooding","p":{"minimum_length_seconds":"15","maximum_length_seconds":"600"}},"felix_creation_enabled":{"g":"control","p":{"is_enabled":"true"}},"felix_creation_fb_crossposting":{"g":"control","p":{"is_enabled":"false"}},"felix_creation_fb_crossposting_v2":{"g":"control","p":{"is_enabled":"true"}},"felix_creation_validation":{"g":"control","p":{"edit_video_controls":"true","max_video_size_in_bytes":"3600000000","title_maximum_length":"75","description_maximum_length":"2200","valid_cover_mime_types":"image/jpeg,image/png","valid_video_mime_types":"video/mp4,video/quicktime","valid_video_extensions":"mp4,mov"}},"felix_creation_video_upload":{"g":"","p":{}},"felix_early_onboarding":{"g":"","p":{}},"pride":{"g":"","p":{}},"unfollow_confirm":{"g":"test","p":{"no_feed_unfollow":"true"}},"profile_enhance_li":{"g":"","p":{}},"profile_enhance_lo":{"g":"","p":{}},"phone_confirm":{"g":"","p":{}},"comment_enhance":{"g":"","p":{}},"mweb_media_chaining":{"g":"control","p":{"should_show_media_chaining":"false"}},"mweb_topical_explore":{"g":"","p":{}},"web_nametag":{"g":"","p":{}},"image_downgrade":{"g":"","p":{}},"image_downgrade_lite":{"g":"test","p":{"should_downgrade":"true"}},"follow_all_fb":{"g":"","p":{}},"lite_direct_upsell":{"g":"","p":{}},"web_loggedout_noop":{"g":"","p":{}},"stories_video_preload":{"g":"","p":{}},"lite_stories_video_preload":{"g":"test","p":{"disable_preload":"true"}},"a2hs_heuristic_uc":{"g":"","p":{}},"a2hs_heuristic_non_uc":{"g":"","p":{}},"web_hashtag":{"g":"","p":{}},"header_scroll":{"g":"","p":{}},"rout":{"g":"","p":{}},"websr":{"g":"search_results_only_08_13","p":{"has_rings_on_followers":"false","has_rings_on_disc_ppl":"false","has_rings_on_likers":"false","has_rings_on_followings":"false","has_rings_on_search_results":"true","has_rings_on_activity":"false"}},"web_lo_follow":{"g":"","p":{}},"web_share":{"g":"","p":{}},"lite_rating":{"g":"","p":{"is_enabled":"false"}},"web_embeds_share":{"g":"","p":{}},"web_share_lo":{"g":"","p":{}},"web_embeds_logged_out":{"g":"","p":{}},"sl":{"g":"test","p":{"show_logo":"true"}},"reg_nux":{"g":"","p":{}}},"hostname":"www.instagram.com","platform":"web","rhx_gis":"a409cac1b5c9d075bb386e195ecf9ff1","nonce":"jHGO8uaBhe9x5ZXFOAC6GQ==","zero_data":{},"rollout_hash":"7d2767d2f983","bundle_variant":"metro","probably_has_app":true}';

        $mockScraper = $this->getMockBuilder(InstagramScraper\Scraper::class)
                     ->setMethods(['scrape'])
                     ->getMock();

        $mockScraper->expects($this->any())
             ->method('scrape')
             ->will($this->returnValue($content));

        $scraper = new TagScraper($mockScraper);
        $tags = $scraper->scrape('snail', TagScraper::IMAGES);

        $this->assertEquals(3, count($tags));
    }
}