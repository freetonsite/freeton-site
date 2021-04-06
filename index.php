<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tonsitemaster
 */

get_header();
?>

<div class="title-box _mb">
                <div class="title-box__inner">
                    <div class="title-box__logo">
                        <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.1832 3.41094C11.7921 3.30616 11.3692 3.40556 11.0346 3.68093L5.43061 8.29239C5.06004 8.59733 4.94124 9.14617 5.154 9.57033L11.629 22.4787C11.9798 23.178 12.7996 23.3977 13.453 22.9675L25.5147 15.026C25.9111 14.765 26.0826 14.2303 25.9142 13.7809L23.3667 6.98531C23.2146 6.57951 22.898 6.28198 22.507 6.1772L12.1832 3.41094Z"
                            stroke="#1589CA" stroke-width="2" />
                        </svg>

                    </div><span class="title-box__text">— Free TON - a community-powered movement for a free and open internet</span>
                    <div class="title-box__info">
                        <div class="title-box__list">
                            <div class="title-box__item">
                                <div class="title-box__wrapper">
                                    <div class="title-box__title">Accounts</div>
                                    <div class="title-box__value" id="info-1">32,511</div>
                                </div>
                            </div>
                            <div class="title-box__item">
                                <div class="title-box__wrapper">
                                    <div class="title-box__title">TON Crystals</div>
                                    <div class="title-box__value" id="info-2">5,019,066,688</div>
                                </div>
                            </div>
                            <div class="title-box__item">
                                <div class="title-box__wrapper">
                                    <div class="title-box__title">Transactions</div>
                                    <div class="title-box__value" id="info-3">31,713,177</div>
                                </div>
                            </div>
                            <div class="title-box__item">
                                <div class="title-box__wrapper">
                                    <div class="title-box__title">Validators</div>
                                    <div class="title-box__value" id="info-4">421</div>
                                </div>
                            </div>
                        </div>
                        <div class="btn__list">
                            <a href="https://ton.live/" target="_blank">
                                TON Live Explorer
                            </a>
                            <a href="https://ton.surf/" target="_blank">
                                TON Surf Browser
                            </a>
                        </div>
                    </div>
                    <div class="line-block _mb _discover">
                        <div class="line-block__inner">
                            <div class="line-block__bef-1">
                                <svg width="391" height="311" viewBox="0 0 400 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M318.309 189.736C321.731 195.663 322.271 202.823 319.775 209.182L273.18 333.721C270.416 340.763 265.305 343.182 257.988 341.251L17.2783 277.65C5.21509 274.468 -1.9594 262.042 1.31638 250.004L66.591 9.74279C68.578 2.44098 73.2279 -0.776606 80.7082 0.351227L211.86 22.2676C218.615 23.2861 224.546 27.3335 227.968 33.2607L318.309 189.736Z"
                                    fill="#85EDC1" />
                                </svg>

                            </div>
                            <div class="line-block__bef-2">
                                <svg width="391" height="311" viewBox="0 0 400 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M318.309 189.736C321.731 195.663 322.271 202.823 319.775 209.182L273.18 333.721C270.416 340.763 265.305 343.182 257.988 341.251L17.2783 277.65C5.21509 274.468 -1.9594 262.042 1.31638 250.004L66.591 9.74279C68.578 2.44098 73.2279 -0.776606 80.7082 0.351227L211.86 22.2676C218.615 23.2861 224.546 27.3335 227.968 33.2607L318.309 189.736Z"
                                    fill="#85EDC1" />
                                </svg>

                            </div>
                            <div class="line-block__bef-3">
                                <svg width="391" height="311" viewBox="0 0 400 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M318.309 189.736C321.731 195.663 322.271 202.823 319.775 209.182L273.18 333.721C270.416 340.763 265.305 343.182 257.988 341.251L17.2783 277.65C5.21509 274.468 -1.9594 262.042 1.31638 250.004L66.591 9.74279C68.578 2.44098 73.2279 -0.776606 80.7082 0.351227L211.86 22.2676C218.615 23.2861 224.546 27.3335 227.968 33.2607L318.309 189.736Z"
                                    fill="#85EDC1" />
                                </svg>

                            </div>
                            <div class="line-block__content">
                                <div class="line-block__box"><span class="line-block__dash">—
                        <div class="line-block__icon"><svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.1832 3.41094C11.7921 3.30616 11.3692 3.40556 11.0346 3.68093L5.43061 8.29239C5.06004 8.59733 4.94124 9.14617 5.154 9.57033L11.629 22.4787C11.9798 23.178 12.7996 23.3977 13.453 22.9675L25.5147 15.026C25.9111 14.765 26.0826 14.2303 25.9142 13.7809L23.3667 6.98531C23.2146 6.57951 22.898 6.28198 22.507 6.1772L12.1832 3.41094Z" stroke="#1589CA" stroke-width="2"/>
</svg>

                        </div></span>
                                    <div class="line-block__text">is&nbsp;a&nbsp;blockchain project of&nbsp;the new generation. It&rsquo;s fast, secure and scalable like nothing before<a class="line-block__link" href="<?php echo site_url('/about'); ?>">Discover</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cat__list">
                        <div class="row__custom">
                            <div class="col__custom cat__item">
                                <a href="<?php echo site_url('/developers'); ?>;" class="cat__item-header">
                                    <div class="cat__item-title">
                                        Developers
                                    </div>
                                    <div class="cat__item-img">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/to-develop.png">
                                    </div>
                                </a>
                                <div class="cat__item-descr">
                                    Want to build your application with Free TON technology?
                                    <br>We have everything you need!
                                </div>
                            </div>
                            <div class="col__custom cat__item">
                                <a href="<?php echo site_url('/community'); ?>" class="cat__item-header">
                                    <div class="cat__item-title">
                                        Users
                                    </div>
                                    <div class="cat__item-img">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/to-use.png">
                                    </div>
                                </a>
                                <div class="cat__item-descr">
                                    There a lots of of ways how you can participate in the life of Free TON Community. Submit proposals, earn prizes in contests, use apps on Free TON technology, send and recieve crystals and much more!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contests _mb">
                <div class="contests__inner">
                    <div class="title-h1 _mb">
                        <h1 class="title-h1__title">Contests</h1><a class="title-h1__link" href="<?php echo site_url('/contests'); ?>">View all</a>
                    </div>
                    <table class="table" style="width:100%">
                        <tr>
                            <th class="table__title">Contest</th>
                            <!--<th class="table__title">Participants</th>-->
                            <th class="table__title">Deadline / Goal</th>
                        </tr>
                        <tr class="table__row">
                            <td class="table__cell">
                                <div class="table__box">
                                    <img class="cell-content__game" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/icons/free-ton.svg"><a class="cell-content__game-title" href="">Contest Proposal: Challenge MIT/Harvard paper on Blockchain Faults in Election Systems</a>
                                </div>
                            </td>
                            <!--<td class="table__cell">
                                <div class="table__box">
                                    <img class="cell-content__people" src="static/img/content/contests/people.svg">
                                    <div class="cell-content__text">418</div>
                                </div>
                            </td>-->
                            <td class="table__cell">
                                <div class="table__box">
                                    <div class="cell-content__text">End of subsidy</div>
                                </div>
                            </td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__cell">
                                <div class="table__box">
                                    <img class="cell-content__game" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/icons/free-ton.svg"><a class="cell-content__game-title" href="">Atomic Swaps on Free TON</a>
                                </div>
                            </td>
                            <!--<td class="table__cell">
                                <div class="table__box">
                                    <img class="cell-content__people" src="static/img/content/contests/people.svg">
                                    <div class="cell-content__text">984</div>
                                </div>
                            </td>-->
                            <td class="table__cell">
                                <div class="table__box">
                                    <div class="cell-content__text">20 Sept, 2020</div>
                                </div>
                            </td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__cell">
                                <div class="table__box">
                                    <img class="cell-content__game" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/icons/free-ton.svg"><a class="cell-content__game-title" href="">Free TON landing page</a>
                                </div>
                            </td>
                            <!--<td class="table__cell">
                                <div class="table__box">
                                    <img class="cell-content__people" src="static/img/content/contests/people.svg">
                                    <div class="cell-content__text">480</div>
                                </div>
                            </td>-->
                            <td class="table__cell">
                                <div class="table__box">
                                    <div class="cell-content__text">9 Oct, 2020</div>
                                </div>
                            </td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__cell">
                                <div class="table__box">
                                    <img class="cell-content__game" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/icons/free-ton.svg"><a class="cell-content__game-title" href="">Free TON Positioning Essay</a>
                                </div>
                            </td>
                            <!--<td class="table__cell">
                                <div class="table__box">
                                    <img class="cell-content__people" src="static/img/content/contests/people.svg">
                                    <div class="cell-content__text">480</div>
                                </div>
                            </td>-->
                            <td class="table__cell">
                                <div class="table__box">
                                    <div class="cell-content__text">1 Oct, 2020</div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="contests__table-m">
                        <div class="contests__label-2">Active contests 4:</div>
                        <div class="contests__list">
                            <div class="contests__item">
                                <img class="cell-content__game" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/icons/free-ton.svg"><a class="cell-content__game-title" href="">The Crystal Game (Magister Ludi)</a>
                                <div class="contests__block">
                                    <!--<div class="contests__box">
                                        <img class="cell-content__people" src="static/img/content/contests/people.svg">
                                        <div class="cell-content__text">418</div>
                                    </div>-->
                                    <div class="cell-content__text">DeadLine: End of subsidy</div>
                                </div>
                            </div>
                            <div class="contests__item">
                                <img class="cell-content__game" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/icons/free-ton.svg"><a class="cell-content__game-title" href="">Atomic Swaps on Free TON</a>
                                <div class="contests__block">
                                    <!--<div class="contests__box">
                                        <img class="cell-content__people" src="static/img/content/contests/people.svg">
                                        <div class="cell-content__text">984</div>
                                    </div>-->
                                    <div class="cell-content__text">DeadLine: 20 Sept, 2020</div>
                                </div>
                            </div>
                            <div class="contests__item">
                                <img class="cell-content__game" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/icons/free-ton.svg"><a class="cell-content__game-title" href="">Free TON landing page</a>
                                <div class="contests__block">
                                    <!--<div class="contests__box">
                                        <img class="cell-content__people" src="static/img/content/contests/people.svg">
                                        <div class="cell-content__text">480</div>
                                    </div>-->
                                    <div class="cell-content__text">DeadLine: 9 Oct, 2020</div>
                                </div>
                            </div>
                            <div class="contests__item">
                                <img class="cell-content__game" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/icons/free-ton.svg"><a class="cell-content__game-title" href="">Free TON Positioning Essay</a>
                                <div class="contests__block">
                                    <!--<div class="contests__box">
                                        <img class="cell-content__people" src="static/img/content/contests/people.svg">
                                        <div class="cell-content__text">480</div>
                                    </div>-->
                                    <div class="cell-content__text">DeadLine: 1 Oct, 2020</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contests__label">Total won by participants</div>
                    <div class="contests__crystals">
                        <img class="contests__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/crystal.svg">
                        <div class="contests__title">8 930 000</div>
                        <div class="contests__title">TON Crystals</div>
                    </div>
                </div>
            </div>
            <div class="action _mb">
                <div class="action__inner">
                    <div class="title-h1 _pl _mb">
                        <div class="title-h1__icon">
                            <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.1832 3.41094C11.7921 3.30616 11.3692 3.40556 11.0346 3.68093L5.43061 8.29239C5.06004 8.59733 4.94124 9.14617 5.154 9.57033L11.629 22.4787C11.9798 23.178 12.7996 23.3977 13.453 22.9675L25.5147 15.026C25.9111 14.765 26.0826 14.2303 25.9142 13.7809L23.3667 6.98531C23.2146 6.57951 22.898 6.28198 22.507 6.1772L12.1832 3.41094Z"
                                stroke="#1589CA" stroke-width="2" />
                            </svg>

                        </div>
                        <h1 class="title-h1__title">in action</h1><a class="title-h1__link" href="<?php echo site_url('/community'); ?>">View all</a>
                    </div>
                    <div class="slider__row">
                        <div class="slick-slider _action">
                            <a class="slick-slider__item" href="http://t.me/FreeTON2MobileBot">
                                <div class="slick-slider__item-inner">
                                    <div class="slick-slider__box">
                                        <img class="slick-slider__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/social/free-ton-mobile.jpg">
                                        <div class="slick-slider__title">FreeTON2Mobile</div>
                                    </div>
                                    <div class="slick-slider__text _m">Painting each pixel and get TON Crystals! Pixels can be painted endlessly!</div>
                                </div>
                            </a>
                            <a class="slick-slider__item" href="https://ttttt.me/pokertonbot?start=r_320534060">
                                <div class="slick-slider__item-inner">
                                    <div class="slick-slider__box">
                                        <img class="slick-slider__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/social/poker.jpeg">
                                        <div class="slick-slider__title">Pokerton</div>
                                    </div>
                                    <div class="slick-slider__text _m">PokerTON is a first full-scale poker room in your Telegram. Тo download and registration required</div>
                                </div>
                            </a>
                            <a class="slick-slider__item" href="http://t.me/Chatex_bot?start=r_124569">
                                <div class="slick-slider__item-inner">
                                    <div class="slick-slider__box">
                                        <img class="slick-slider__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/social/chatex.jpg">
                                        <div class="slick-slider__title">Chatex</div>
                                    </div>
                                    <div class="slick-slider__text _m">TON Crystal instant exchange</div>
                                </div>
                            </a>
                            <a class="slick-slider__item" href="https://ton-explorer.com/">
                                <div class="slick-slider__item-inner">
                                    <div class="slick-slider__box">
                                        <img class="slick-slider__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/social/explorer.svg">
                                        <div class="slick-slider__title">TON Explorer</div>
                                    </div>
                                    <div class="slick-slider__text _m">FreeTON Blockchain Explorer</div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="line-block _mb _social">
                <div class="line-block__inner">
                    <div class="line-block__bef-1">
                        <svg width="391" height="311" viewBox="0 0 400 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M318.309 189.736C321.731 195.663 322.271 202.823 319.775 209.182L273.18 333.721C270.416 340.763 265.305 343.182 257.988 341.251L17.2783 277.65C5.21509 274.468 -1.9594 262.042 1.31638 250.004L66.591 9.74279C68.578 2.44098 73.2279 -0.776606 80.7082 0.351227L211.86 22.2676C218.615 23.2861 224.546 27.3335 227.968 33.2607L318.309 189.736Z"
                            fill="#85EDC1" />
                        </svg>

                    </div>
                    <div class="line-block__bef-2">
                        <svg width="391" height="311" viewBox="0 0 400 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M318.309 189.736C321.731 195.663 322.271 202.823 319.775 209.182L273.18 333.721C270.416 340.763 265.305 343.182 257.988 341.251L17.2783 277.65C5.21509 274.468 -1.9594 262.042 1.31638 250.004L66.591 9.74279C68.578 2.44098 73.2279 -0.776606 80.7082 0.351227L211.86 22.2676C218.615 23.2861 224.546 27.3335 227.968 33.2607L318.309 189.736Z"
                            fill="#85EDC1" />
                        </svg>

                    </div>
                    <div class="line-block__bef-3">
                        <svg width="391" height="311" viewBox="0 0 400 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M318.309 189.736C321.731 195.663 322.271 202.823 319.775 209.182L273.18 333.721C270.416 340.763 265.305 343.182 257.988 341.251L17.2783 277.65C5.21509 274.468 -1.9594 262.042 1.31638 250.004L66.591 9.74279C68.578 2.44098 73.2279 -0.776606 80.7082 0.351227L211.86 22.2676C218.615 23.2861 224.546 27.3335 227.968 33.2607L318.309 189.736Z"
                            fill="#85EDC1" />
                        </svg>

                    </div>
                    <div class="line-block__content">
                        <div class="line-block__text">Follow us on social networks and public platforms —</div>
                        <div class="social _follow">
                            <div class="social__item">
                                <a target="_blank" href="https://t.me/ton_crystal_news">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/social/telegram.svg">
                                </a>
                            </div>
                            <div class="social__item social__item-medium">
                                <a target="_blank" href="https://medium.com/freeton">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/social/medium.svg">
                                </a>
                            </div>
                            <div class="social__item">
                                <a target="_blank" href="https://twitter.com/CommunityTon">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/social/twitter.svg">
                                </a>
                            </div>
                            <div class="social__item">
                                <a target="_blank" href="https://www.linkedin.com/in/free-ton/">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/social/linkedin.svg">
                                </a>
                            </div>
                            <div class="social__item">
                                <a target="_blank" href="https://www.reddit.com/r/TONCRYSTAL/">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/social/reddit.svg">
                                </a>
                            </div>
                            <div class="social__item">
                                <a target="_blank" href="https://www.youtube.com/c/FreeTON_official/featured">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/social/youtube.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="publications _mb">
                <div class="publications__inner">
                    <div class="title-h1 _mb">
                        <h1 class="title-h1__title">Publications</h1>
                    </div>
                    <table class="table" style="width:100%">
                        <tr>
                            <th class="table__title">Author</th>
                            <th class="table__title">Topic</th>
                            <th class="table__title">Platform</th>
                            <th class="table__title">Date</th>
                        </tr>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                        
						<tr class="table__row">
                            <td class="table__cell">
                                <div class="table__box _max">
                                    <div class="cell-content__avatar">
									<?php echo get_the_post_thumbnail( $page->ID, 'full'); ?>
									</div>
                                    <p class="cell-content__text"><?php the_author(); ?></p>
                                </div>
                            </td>
                            <td class="table__cell">
                                <div class="table__box"><a class="cell-content__topic" href="<?php the_permalink(); ?>"><?php the_title( '<h3>', '</h3>' ); ?></a>
                                </div>
                            </td>
                            <td class="table__cell">
                                <div class="table__box _max">
                                    <div class="cell-content__platform">Medium</div>
                                </div>
                            </td>
                            <td class="table__cell">
                                <div class="table__box _max">
                                    <p class="cell-content__text"><?php the_date('j M'); ?></p>
                                </div>
                            </td>
                        </tr>

						<?php
							endwhile;
						else :
						
							get_template_part( 'template-parts/content', 'none' );
						
						endif;
						?>
                        
                        
                    </table>
                    <div class="publications__table-m">
                        <div class="publications__label">Topic</div>
                        <div class="publications__list">
                            <div class="publications__item"><a class="cell-content__topic" href="">How a Blockchain Based System Can Help on Election Reliability</a>
                                <div class="publications__block">
                                    <div class="publications__box">
                                        <img class="cell-content__avatar" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/avatar.png">
                                        <p class="cell-content__text">Hellen O.</p>
                                    </div>
                                    <p class="cell-content__text">22 Aug</p>
                                </div>
                            </div>
                            <div class="publications__item"><a class="cell-content__topic" href="">How a Blockchain Based System Can Help on Election Reliability</a>
                                <div class="publications__block">
                                    <div class="publications__box">
                                        <img class="cell-content__avatar" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/avatar.png">
                                        <p class="cell-content__text">Hellen O.</p>
                                    </div>
                                    <p class="cell-content__text">22 Aug</p>
                                </div>
                            </div>
                            <div class="publications__item"><a class="cell-content__topic" href="">How a Blockchain Based System Can Help on Election Reliability</a>
                                <div class="publications__block">
                                    <div class="publications__box">
                                        <img class="cell-content__avatar" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/avatar.png">
                                        <p class="cell-content__text">Hellen O.</p>
                                    </div>
                                    <p class="cell-content__text">22 Aug</p>
                                </div>
                            </div>
                            <div class="publications__item"><a class="cell-content__topic" href="">How a Blockchain Based System Can Help on Election Reliability</a>
                                <div class="publications__block">
                                    <div class="publications__box">
                                        <img class="cell-content__avatar" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/avatar.png">
                                        <p class="cell-content__text">Hellen O.</p>
                                    </div>
                                    <p class="cell-content__text">22 Aug</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wallet _mb">
                <div class="wallet__inner">
                    <div class="title-h1 _mb">
                        <h1 class="title-h1__title">Wallet applications</h1>
                    </div>
                    <div class="slider__row">
                        <div class="slick-slider _wallet">
                            <a class="slick-slider__item" href="https://l1.broxus.com/freeton/wallet">
                                <div class="slick-slider__box">
                                    <img class="slick-slider__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/wallet/broxus.svg">
                                    <div class="slick-slider__title">TON Crystal Wallet</div>
                                </div>
                                <div class="slick-slider__text">Set up your own TON Crystal Wallet on the FreeTON mainnet.</div>
                            </a>
                            <a class="slick-slider__item" href="https://t.me/Chatex_bot?start=r_124569">
                                <div class="slick-slider__box">
                                    <img class="slick-slider__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/wallet/chatex.jpg">
                                    <div class="slick-slider__title">Chatex</div>
                                </div>
                                <div class="slick-slider__text">CHATEX bot-messenger technology makes crypto exchange available to anyone with a standard smartphone</div>
                            </a>
                            <a class="slick-slider__item" href="https://t.me/Chatex_bot?start=r_124569">
                                <div class="slick-slider__box">
                                    <img class="slick-slider__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/wallet/sarf.svg">
                                    <div class="slick-slider__title">Chatex</div>
                                </div>
                                <div class="slick-slider__text">CHATEX bot-messenger technology makes crypto exchange available to anyone with a standard smartphone</div>
                            </a>
                            <a class="slick-slider__item" href="https://ton.surf/main">
                                <div class="slick-slider__box">
                                    <img class="slick-slider__icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/wallet/sarf.svg">
                                    <div class="slick-slider__title">TON Surf</div>
                                </div>
                                <div class="slick-slider__text">A free, private and easy blockchain interface for smart people</div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="events _mb">
                <div class="events__inner">
                    <div class="title-h1 _mb _dark">
                        <h1 class="title-h1__title">Online events </h1><a class="title-h1__link" href="https://blog.freeton.org/events">View all</a>
                    </div>
                    <div class="slider__row">
                        <div class="slick-slider _events">
                            <div>
                                <a href="https://www.youtube.com/watch?v=mGePvsOzCrY">
                                    <img class="slick-slider__img" src="https://img.youtube.com/vi/mGePvsOzCrY/0.jpg">
                                </a>
                            </div>
                            <div>
                                <a href="https://www.youtube.com/watch?v=Du5N-vXr7QI">
                                    <img class="slick-slider__img" src="https://img.youtube.com/vi/Du5N-vXr7QI/0.jpg">
                                </a>
                            </div>
                            <div>
                                <a href="https://www.youtube.com/watch?v=Xdev61q-iTE">
                                    <img class="slick-slider__img" src="https://img.youtube.com/vi/Xdev61q-iTE/0.jpg">
                                </a>
                            </div>
                            <div>
                                <a href="https://www.youtube.com/watch?v=ouE45vHep0U">
                                    <img class="slick-slider__img" src="https://img.youtube.com/vi/ouE45vHep0U/0.jpg">
                                </a>
                            </div>
                            <div>
                                <a href="https://www.youtube.com/watch?v=tNj0UfDNhvQ">
                                    <img class="slick-slider__img" src="https://img.youtube.com/vi/tNj0UfDNhvQ/0.jpg">
                                </a>
                            </div>
                            <div>
                                <a href="https://www.youtube.com/watch?v=I7b5YE28jUQ">
                                    <img class="slick-slider__img" src="https://img.youtube.com/vi/I7b5YE28jUQ/0.jpg">
                                </a>
                            </div>
                            <div>
                                <a href="https://www.youtube.com/watch?v=GE2SbOWWKcw">
                                    <img class="slick-slider__img" src="https://img.youtube.com/vi/GE2SbOWWKcw/0.jpg">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="languages _mb">
                <div class="languages__inner">
                    <div class="title-h1 _mb _br-ln">
                        <h1 class="title-h1__title">We speak
many languages</h1>
                    </div>
                    <div class="languages__text">Find and join your local Free TON community!</div>
                    <div class="governance__wrapper">
                        <div class="languages__list">
                            <a class="languages__item" href="https://t.me/TonAfrica">
                                <p>Africa</p>
                            </a>
                            <a class="languages__item" href="https://t.me/freeton_arabic">
                                <p>Arabic</p>
                            </a>
                            <a class="languages__item" href="https://t.me/Free_TON_ASEAN">
                                <p>Asia</p>
                            </a>
                            <a class="languages__item" href="https://t.me/freeton_pt">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/br.svg">
                                <p>Brazil</p>
                            </a>
                            <a class="languages__item" href="https://t.me/ton_canada">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/ca.svg">
                                <p>Canada</p>
                            </a>
                            <a class="languages__item" href="https://t.me/freeton_china">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/cn.svg">
                                <p>China</p>
                            </a>
                            <a class="languages__item" href="https://t.me/ton_ecuador">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/ec.svg">
                                <p>Ecuador</p>
                            </a>
                            <a class="languages__item" href="https://t.me/gramfr">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/fr.svg">
                                <p>France</p>
                            </a>
                            <a class="languages__item" href="https://t.me/ton_de">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/de.svg">
                                <p>Germany</p>
                            </a>
                            <a class="languages__item" href="https://t.me/FreeTONGreekCommunity">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/gr.svg">
                                <p>Greece</p>
                            </a>
                            <a class="languages__item" href="https://t.me/freeton_india">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/in.svg">
                                <p>India</p>
                            </a>
                            <a class="languages__item" href="https://t.me/freetoniran">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/ir.svg">
                                <p>Iran</p>
                            </a>
                            <a class="languages__item" href="https://t.me/freeton_Israel">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/il.svg">
                                <p>Israel</p>
                            </a>
                            <a class="languages__item" href="https://t.me/TOpenNetworkItalia">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/it.svg">
                                <p>Italy</p>
                            </a>
                            <a class="languages__item" href="https://t.me/tonkoreaorg">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/kr.svg">
                                <p>Korea</p>
                            </a>
                            <a class="languages__item" href="https://t.me/freeton_latvija_komuna">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/lv.svg">
                                <p>Latvia</p>
                            </a>
                            <a class="languages__item" href="https://t.me/freeton_Malta">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/mt.svg">
                                <p>Malta</p>
                            </a>
                            <a class="languages__item" href="https://t.me/freeton_mexico">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/mx.svg">
                                <p>Mexico</p>
                            </a>
                            <a class="languages__item" href="https://t.me/freeTONru">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/ru.svg">
                                <p>Russia</p>
                            </a>
                            <a class="languages__item" href="https://t.me/freetonsg">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/sg.svg">
                                <p>Singapore</p>
                            </a>
                            <a class="languages__item" href="https://t.me/ton_es">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/es.svg">
                                <p>Spain</p>
                            </a>
                            <a class="languages__item" href="https://t.me/tonturkiye">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/tr.svg">
                                <p>Turkey</p>
                            </a>
                            <a class="languages__item" href="https://t.me/freeton_ukraine">
                                <img class="languages__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/flags/ua.svg">
                                <p>Ukraine</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="proposals home-page__proposals">
                <div class="proposals__inner">
                    <div class="title-h1 _mb">
                        <h1 class="title-h1__title">Proposals</h1><a class="title-h1__link" href="https://gov.freeton.org/?section=proposals">View all</a>
                    </div>
                    <div class="slider__row">
                        <div class="slick-slider _proposals">
                            <a class="slick-slider__item">
                                <div class="slick-slider__title">#67 Analytics & Support Sub-governance Proposal</div>
                                <div class="slick-slider__info">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/status.svg">
                                    <div class="slick-slider__status">Passed</div>
                                    <div class="slick-slider__time">Created 15.10.2020, 18:56</div>
                                </div>
                                <div class="slick-slider__info">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/list.svg">
                                    <div class="slick-slider__description">Analytics & Support Sub-governanc...</div>
                                </div>
                            </a>
                            <a class="slick-slider__item">
                                <div class="slick-slider__title">#67 Analytics & Support Sub-governance Proposal</div>
                                <div class="slick-slider__info">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/status.svg">
                                    <div class="slick-slider__status">Passed</div>
                                    <div class="slick-slider__time">Created 15.10.2020, 18:56</div>
                                </div>
                                <div class="slick-slider__info">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/list.svg">
                                    <div class="slick-slider__description">Second KYV Verification for Magist ...</div>
                                </div>
                            </a>
                            <a class="slick-slider__item">
                                <div class="slick-slider__title">#67 Analytics & Support Sub-governance Proposal</div>
                                <div class="slick-slider__info">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/status.svg">
                                    <div class="slick-slider__status">Passed</div>
                                    <div class="slick-slider__time">Created 15.10.2020, 18:56</div>
                                </div>
                                <div class="slick-slider__info">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/list.svg">
                                    <div class="slick-slider__description">Second KYV Verification for Magist ...</div>
                                </div>
                            </a>
                            <a class="slick-slider__item">
                                <div class="slick-slider__title">#67 Analytics & Support Sub-governance Proposal</div>
                                <div class="slick-slider__info">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/status.svg">
                                    <div class="slick-slider__status">Passed</div>
                                    <div class="slick-slider__time">Created 15.10.2020, 18:56</div>
                                </div>
                                <div class="slick-slider__info">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/list.svg">
                                    <div class="slick-slider__description">Second KYV Verification for Magist ...</div>
                                </div>
                            </a>
                            <a class="slick-slider__item">
                                <div class="slick-slider__title">#67 Analytics & Support Sub-governance Proposal</div>
                                <div class="slick-slider__info">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/status.svg">
                                    <div class="slick-slider__status">Passed</div>
                                    <div class="slick-slider__time">Created 15.10.2020, 18:56</div>
                                </div>
                                <div class="slick-slider__info">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/list.svg">
                                    <div class="slick-slider__description">Second KYV Verification for Magist ...</div>
                                </div>
                            </a>
                            <a class="slick-slider__item">
                                <div class="slick-slider__title">#67 Analytics & Support Sub-governance Proposal</div>
                                <div class="slick-slider__info">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/status.svg">
                                    <div class="slick-slider__status">Passed</div>
                                    <div class="slick-slider__time">Created 15.10.2020, 18:56</div>
                                </div>
                                <div class="slick-slider__info">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/static/img/content/list.svg">
                                    <div class="slick-slider__description">Second KYV Verification for Magist ...</div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="governance _mb">
                <div class="governance__inner">
                    <div class="title-h1 _mb">
                        <h1 class="title-h1__title">Governance</h1>
                    </div>
                    <div class="governance__text">Free TON is based on decentralized governance and sub-governance. Find the right sub-gov that best fits your talents. Find the full list here:</div>
                    <div class="governance__wrapper">
                        <div class="governance__list"><a class="governance__item _gold" href="https://gov.freeton.org/">Free TON Governance</a>
                            <a class="governance__item" href="https://wiki.gov.freeton.org/">Wiki Subgovernance</a>
                            <a class="governance__item" href="https://korea.gov.freeton.org/">Korean Subgovernance</a>
                            <a
                            class="governance__item" href="https://defi.gov.freeton.org/">DeFi Subgovernance</a>
                            <a class="governance__item" href="https://ambassador.gov.freeton.org/">Ambassador Subgovernance</a>
                            <a class="governance__item" href="https://smm.gov.freeton.org/">SMM Subgovernance</a>
                            <a class="governance__item"
                                href="https://dgo.gov.freeton.org/">DGO Subgovernance</a>
                            <a class="governance__item" href="https://esports.gov.freeton.org/">eSports Subgovernance</a>
                            <a class="governance__item" href="https://devex.gov.freeton.org/">DevEx Subgovernance</a>
                                <a
                                class="governance__item" href="https://support.gov.freeton.org/">Analytics & Support Subgovernance</a>
                            <a class="governance__item" href="https://wd.gov.freeton.org/">Web & Design Subgovernance</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
get_footer();
