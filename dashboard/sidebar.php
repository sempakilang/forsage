<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $page; ?> | Dashboard</title>
    <meta charset="utf-8">
        <script src="assets/Decentralized/js/Qz1JI3jKPnt9NwuKnYPNmoYn8JE.js"></script>
        <link rel="stylesheet" href="assets/Decentralized/css/all.min.css" />
         <link rel="stylesheet" href="assets/Decentralized/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/Decentralized/css/jquery.fancybox.min.css" />
<link rel="stylesheet" href="assets/Decentralized/css/common.css" />
<link rel="stylesheet" href="assets/Decentralized/css/main.css" />
<link rel="stylesheet" href="assets/Decentralized/css/style.css" />   
 <link rel="apple-touch-icon" sizes="180x180" href="assets/Decentralized/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/Decentralized/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/Decentralized/img/favicon-16x16.png">
    <link rel="manifest" href="assets/Decentralized/img/site.webmanifest">
    <link rel="mask-icon" href="assets/Decentralized/img/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/Decentralized/img/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Forsage">
    <meta name="application-name" content="Forsage">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/Decentralized/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
	
<script type="text/javascript" src="core/js/dashboard.js" crossorigin="anonymous">
	
</script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 logotype-wrapper">
            <div class="logotype">
                <a href="//forsage.io">
                    <img src="assets/Decentralized/img/logo-03.svg" alt="">
                    <!-- <img src="/img/forsagelogo.svg" alt=""> -->
                </a>
            </div>
        </div>
        <div class="col-md-8 nav-wrapper">
            <ul class="nav">
                <li>
                    <div class="auth-mode_view mr-2" title="Telegram">
                        <a href="https://telete.in/forsage_official" target="_blank"> 
                            <i class="fab fa-telegram"></i>
                        </a>
                    </div>
                </li>
                                <li>
                    <div class="auth-mode_view" title="View mode">
                        <i class="fa fa-eye"></i>
                    </div>
                </li>
                                <li>
                    <a href="/">
                        Office                    </a>
                    <ul>
                        <li <?php if($page == 'Dashboard'){echo "active";} ?>>
                            <a href="<?php echo SITE_URL.'dashboard';  ?>">
                                The main panel                            </a>
                        </li>
                        <li <?php if($page == 'Partners'){echo "active";} ?>>
                            <a href="<?php echo SITE_URL.'dashboard/partners.php';  ?>">
                                Partners                            </a>
                        </li>
                        <li <?php if($page == 'Statistics'){echo "active";} ?>>
                            <a href="<?php echo SITE_URL.'dashboard/statistics.php';  ?>">
                                Statistics                            </a>
                        </li>
						<li <?php if($page == 'Statistics'){echo "active";} ?>>
                            <a href="<?php echo SITE_URL.'dashboard/uplines.php';  ?>">
                                Uplines                            </a>
                        </li>
                        <li <?php if($page == 'Dashboard'){echo "active";} ?>>
                            <a href="/user/target/">
                                Goal                            </a>
                        </li>
                    </ul>
                </li>
                <li >
                    <a href="<?php echo SITE_URL.'dashboard/information.php';  ?>">Information</a>
                    <ul>
                        <li>
                            <a href="/guide/">
                                Instructions                            </a>
                        </li>
                        <!-- <li>
                            <a href="/page/news/">
                                News                            </a>
                        </li>
                        <li>
                            <a href="/page/webinar/">
                                Webinars                            </a>
                        </li> -->
                    </ul>
                </li>
                <li >
                    <a href="<?php echo 'http://localhost/forsage/'.'dashboard/logoutRedirect.php';  ?>">
                        Logout                    </a>
                </li>
            </ul><script>  
				var c = "<?php echo $c;?>";
			if(c === 'ru'){            
			    document.write('<span class="flag-icon flag-icon-ru"></span>');
			}else if(c === 'jp'){            
			    document.write('<span class="flag-icon flag-icon-jp"></span>');
            
            }else if(c === 'de'){            
			    document.write('<span class="flag-icon flag-icon-de"></span>');
            
            }else if(c === 'in'){            
			    document.write('<span class="flag-icon flag-icon-in"></span>');
            
            } else{
			    document.write('<span class="flag-icon flag-icon-us"></span>');
			}
              </script>
      
			
            <div class="lang">
                <div class="lang-current">
                    <a onClick="document.cookie='country=en; path=/'; location.reload();">
                        <img src="assets/Decentralized/img/en.svg" alt="">
                    </a>
                </div>
                <div class="lang-list">
                                        <a onClick="document.cookie='country=ru; path=/'; location.reload();">
                        <img src="assets/Decentralized/img/ru.svg" alt="">
                        <span>РУССКИЙ</span>
                    </a>
                                        <a onClick="document.cookie='country=en; path=/'; location.reload();">
                        <img src="assets/Decentralized/img/en.svg" alt="">
                        <span>ENGLISH</span>
                    </a>
                                        <a  onClick="document.cookie='country=de; path=/'; location.reload();">
                        <img src="assets/Decentralized/img/de.svg" alt="">
                        <span>GERMAN</span>
                    </a>
                                        <a  onClick="document.cookie='country=es; path=/'; location.reload();">
                        <img src="assets/Decentralized/img/es.svg" alt="">
                        <span>SPANISH</span>
                    </a>
                                        <a onClick="document.cookie='country=fr; path=/'; location.reload();">
                        <img src="assets/Decentralized/img/fr.svg" alt="">
                        <span>FRENCH</span>
                    </a>
                                        <a onClick="document.cookie='country=it; path=/'; location.reload();">
                        <img src="assets/Decentralized/img/it.svg" alt="">
                        <span>ITALIAN</span>
                    </a>
                                        <a onClick="document.cookie='country=az; path=/'; location.reload();">
                        <img src="assets/Decentralized/img/az.svg" alt="">
                        <span>AZƏRBAYCAN</span>
                    </a>
                                        <a onClick="document.cookie='country=tr; path=/'; location.reload();">
                        <img src="assets/Decentralized/img/tr.svg" alt="">
                        <span>TÜRKIYE</span>
                    </a>
                                        <a onClick="document.cookie='country=pt; path=/'; location.reload();">
                        <img src="assets/Decentralized/img/pt.svg" alt="">
                        <span>PORTUGAL</span>
                    </a>
                                        <a onClick="document.cookie='country=id; path=/'; location.reload();"href="?lang=id">
                        <img src="assets/Decentralized/img/id.svg" alt="">
                        <span>INDONESIAN</span>
                    </a>
                                    </div>
            </div>
            <div class="stats-top ">
                <div class="row no-gutters align-items-center">
                    <div class="col-8 stats-top_sum" style="color: #DD74C8">
                        <?php echo $totalPartners; ?>             </div>
                    <div class="col-3 stats-top_subject" >
                        ALL<br>PARTICIPANTS                    </div>
                </div>
                <div class="row no-gutters align-items-center">
                    <div class="col-8 stats-top_sum" style="color: #1EA4C1">
                        +8688                    </div>
                    <div class="col-4 stats-top_subject">
                        JOINED<br>IN 24 HOURS                    </div>
                </div>
                <div class="row no-gutters align-items-center">
                    <div class="col-8 stats-top_sum" style="color: #A2A1F2">
                          <?php echo $levelProfit; ?>                    </div>
                    <div class="col-4 stats-top_subject">
                        PARTICIPANTS<br>have EARNED ETH                    </div>
                </div>
                <div class="row no-gutters align-items-center">
                    <div class="col-8 stats-top_sum" style="color: #A2A1F2;">
                        <?php echo number_format((float)($totalEarned*$ethPrice), 2, '.', ''); ?>                       </div>
                    <div class="col-4 stats-top_subject">
                        PARTICIPANTS<br>have EARNED USD                    </div>
                </div>
            </div>
        </div>
    </div>
   
   
   <div class="row">
        <div class="col-lg-3 mb-4">
            <div class="border-gradient section-left">
                <div class="border-gradient_content status-panel">
                    <div class="status-panel_id">
                        <a href="javascript:;" style="color:#EEE" class="status-panel__user-id" data-trigger_value_siblings=".trigger_value__user-id" data-trigger_value="***|123">
                            ID <span title="Show/Hide"><?php echo $userID; ?></span>
                        </a>
                                                <div class="status-panel_partners__top">
                                                            <span><?php echo $totalPartners; ?></span>
                                <img src="assets/Decentralized/img/partners_light.svg" alt="">
                                                    </div>
                    </div>
                    <div class="status-panel__logo">
                        <img src="assets/Decentralized/img/eth-logo-big.png">
                    </div>
                    <div class="status-panel_money">
                        <div class="status-panel_money_total__dollars">
                            $<?php echo number_format((float)($totalEarned*$ethPrice), 2, '.', ''); ?>            </div>
                        <div class="status-panel_money_total__eth" title="(0)">
                                                        <?php echo $levelProfit; ?>  eth
                        </div>
                    </div>
                                                                                    <div class="status-panel_money">
                        <div class="border-gradient">
                            <div class="border-gradient_content">
                                <div class="logotypeX3">
									<a href="/#x3main" ><img src="assets/Decentralized/img/x3.svg" alt=""></a>                               
								</div>
                                <div class="status-panel_money__dollars">
                                    $0                                </div>
                                <div class="status-panel_money__eth" title="(0)">
                                    0.000 eth
                                </div>
                            </div>
                        </div>
                        <div class="border-gradient">
                            <div class="border-gradient_content">
                                <div class="logotypeX4">
									<a href="/#x4main" ><img src="assets/Decentralized/img/x4.svg" alt=""></a>                               
                                </div>
                                <div class="status-panel_money__dollars">
                                    $0                                </div>
                                <div class="status-panel_money__eth" title="(0)">
                                    0.000 eth
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="telegram-bot_notify">
                        <a href="https://telete.in/forsage_io_bot?add_address=0x948e5f339942f9f6cf417c5fe6de73ef6059bd8b" target="_blank">
                            <img src="assets/Decentralized/img/bot_notif.png" alt=""> Enable notifications                        </a>
                    </div>
                    <div class="select-currency">
                        <i class="fas fa-globe icon"></i>
                                                    <a href="?currency=ETH_USD" class="active ">
                                USD                            </a>
                                                    <a href="?currency=ETH_EUR" class="">
                                EUR                            </a>
                                                    <a href="?currency=ETH_RUB" class="">
                                RUB                            </a>
                                            </div>
                </div>
            </div>
            <div class="section-right">
                <div class="border-gradient">
                    <div class="border-gradient_content status-panel_partners pb-5">
                        <div class="status-panel_partners__subject">
                            Affiliate link                            <div class="status-panel_partners__count">
                                                                    <span>0</span>
                                    <img src="assets/Login/Decentralized/img/partners_light.svg" alt="">
                                                            </div>
                        </div>
                        <div class="area-text status-panel_partners__link trigger_value__user-refkey" title="https://forsage.io/i/vpat19/">
                            <input type="text" value="http://localhost/forsage?a=<?=$userID;?>" id="refLink" onclick="document.getElementById('refLink').select();" readonly>
                        </div>
                        <div class="status-panel_partners_copy" onclick="copyText('http://localhost/forsage?a=<?=$userID;?>');">
                            Copy                        </div>
                    </div>
                </div>
                <div class="border-gradient mt-5">
                    <div class="border-gradient_content status-panel_wallets pb-4">
                        <div class="status-panel_wallets__subject">
                            Your Ethereum wallet                        </div>
                        <div class="status-panel_wallet">
                            <?php echo $userWallet; ?>                        </div>
                        <a href="https://etherscan.io/address/<?php echo $userWallet; ?>" target="_blank" class="status-panel_wallets__btn" style="left:6px;">
                            TO ETHERSCAN                        </a>
                        <div class="status-panel_wallets__btn" style="right:6px;" onclick="window.copyText('<?php echo $userWallet; ?>')">
                            COPY                        </div>
                    </div>
                </div>
                <div class="border-gradient mt-5">
                    <div class="border-gradient_content status-panel_wallets pb-4">
                        <div class="status-panel_wallets__subject">
                            Smart Contract address                        </div>
                        <div class="status-panel_wallet">
                           0xbe1f94f08db7db10baa4858411d8fb5c9279b3d9</div>
                        <a href="https://etherscan.io/address/0xbe1f94f08db7db10baa4858411d8fb5c9279b3d9" target="_blank" class="status-panel_wallets__btn" style="left:6px;">
                            TO ETHERSCAN                        </a>
                        <div class="status-panel_wallets__btn" style="right:6px;" onclick="window.copyText('0xbe1f94f08db7db10baa4858411d8fb5c9279b3d9')">
                            COPY                        </div>
                    </div>
                </div>
            </div>
        </div>
       