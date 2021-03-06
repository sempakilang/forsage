<?php
$page = "Statistics";

include('core/common_code.php');
 
include('sidebar.php');

?>
       <link rel="stylesheet" href="global/vendor/datatables.net-bs4/dataTables.bootstrap4.minfd53.css?v4.0.1">
 
            <style>
			.row.min-width_structure{ width:75% }
			</style>
<div class="row min-width_structure">
    <div class="col">
        <div class="border-gradient">
            <div class="border-gradient_content">
                <h3>Financial statistics</h3>
                <br>
                <h4 class="text-center" style="cursor: pointer;" data-spoiler=".filter-wrapper">
                    Filter                </h4>
                <form class="filter-wrapper" method="POST" action="<?php echo SITE_URL.'dashboard/?statistics.php';?>" style="display: block">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="matrix">Program</label>
                            <select name="matrix" id="matrix" class="form-control">
                                <option value="">---</option>
                                                                <option value="1" >
                                    X3                                </option>
                                                                <option value="2" >
                                    X4                                </option>
                                                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="level">Slot</label>
                            <select name="level" id="level" class="form-control">
                                <option value="">---</option>
                                                             <option value="1" <?php if($_POST){ if($_POST['level']=='1') { echo 'selected=selected';} }?>>
                              1                                
                           </option>
                           <option value="2" <?php if($_POST){ if($_POST['level']=='2') { echo 'selected=selected';} }?>>
                              2                                
                           </option>
                           <option value="3" <?php if($_POST){ if($_POST['level']=='3') { echo 'selected=selected';} }?>>
                              3                                
                           </option>
                           <option value="4" <?php if($_POST){ if($_POST['level']=='4') { echo 'selected=selected';} }?>>
                              4                                
                           </option>
                           <option value="5" <?php if($_POST){ if($_POST['level']=='5') { echo 'selected=selected';} }?>>
                              5                                
                           </option>
                           <option value="6" <?php if($_POST){ if($_POST['level']=='6') { echo 'selected=selected';} }?>>
                              6                                
                           </option>
                           <option value="7" <?php if($_POST){ if($_POST['level']=='7') { echo 'selected=selected';} }?>>
                              7                                
                           </option>
                           <option value="8" <?php if($_POST){ if($_POST['level']=='8') { echo 'selected=selected';} }?>>
                              8                                
                           </option>
                           <option value="9" <?php if($_POST){ if($_POST['level']=='9') { echo 'selected=selected';} }?>>
                              9                                
                           </option>
                           <option value="10" <?php if($_POST){ if($_POST['level']=='10') { echo 'selected=selected';} }?>>
                              10                                
                           </option>
                           <option value="11" <?php if($_POST){ if($_POST['level']=='11') { echo 'selected=selected';} }?>>
                              11                                
                           </option>
                           <option value="12" <?php if($_POST){ if($_POST['level']=='12') { echo 'selected=selected';} }?>>
                              12                                
                           </option>
                                                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="direction">Direction</label>
                            <select name="direction" id="direction" class="form-control">
                                <option value="">---</option>
                                <option value="0" >
                                    Incoming                                </option>
                                <option value="1" >
                                    Outgoing                                </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="type">Type of transaction</label>
                            <select name="type" id="type" class="form-control">
                                <option value="">---</option>
                                                                <option value="newUserPlaceEvent" >
                                    Sold places                                </option>
                                                                <option value="upgrageEvent" >
                                    Upgrades                                </option>
                                                                <option value="reinvestEvent" >
                                    Reinvest                                </option>
                                                                <option value="missedEthReceive" >
                                    Lost profits                                </option>
                                                                <option value="leadingPartnerToUpline" >
                                    Overtaking                                </option>
                                                                <option value="sentExtraEthDividends" >
                                    Gifts                                </option>
                                                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group mt-2">
                                <label for="tx">Search by hash</label>                             
                                <input type="text" name="wallet" value="<?php if($_POST){ if($_POST['wallet']!='') { echo $_POST['wallet'];} }?>" placeholder="Enter..." id="tx" class="form-control">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="user" value="123">
                    <input type="hidden" name="sid" value="">
                    <button type="submit" class="btn btn-primary">
                        Apply                    </button>
                    <a href="<?php echo SITE_URL.'dashboard/?statistics';?>" class="btn btn-secondary">
                        Reset filter                    </a>
                </form>
                <br>
				<?php
				$count = 0;
				$query = "SELECT * FROM event_lostforlevelev where referrer='".clean($userWallet)."' ";
				$result = mysqli_query($conn,$query);
				$row = mysqli_num_rows($result);
				
				if($row != NULL && $row > 0){
					while ($row1 = $result -> fetch_assoc()) {

					
				//find user id
				$query = "SELECT * FROM event_reglevelev where userWallet='".$row1['buyer']."' limit 1 ";
				$result = mysqli_query($conn,$query);
				$row = mysqli_num_rows($result);
				$buyerID;
				if($row != NULL && $row > 0){
					$row2 = $result -> fetch_assoc();
					$buyerID = $row2['userID'];
					$count = $count +1;
				}
				}
				}
				?>
                <p>
                    The last transaction                    <span style="float: right" title="The number of transactions">(Total: <?php echo $count;?>)</span>
                </p>
				<?php 
				if($_POST){
				//$matrix= $_POST['matrix'];
				$levels = $_POST['level'];
				//$direction= $_POST['direction'];
				//$type= $_POST['type'];
				$wallet = $_POST['wallet'];
				}
					?>
                <div class="page-stats">
                    <table class="table tableStyle page-stats_table">
                        <thead>
							<tr role="row">
								<th >Date</th>
								<th>ETH Amount</th>
								<th>Wallet Address</th>
								<th>User ID</th>
								<th >Levels</th>
							</tr>
						</thead>
						<tbody>


<?php

 $query = "SELECT * FROM event_lostforlevelev where referrer='".clean($userWallet)."' ";
$result = mysqli_query($conn,$query);
$row = mysqli_num_rows($result);
if($row != NULL && $row > 0){
	while ($row1 = $result -> fetch_assoc()) {


//find user id
 $query = "SELECT * FROM event_reglevelev where userWallet='".$row1['buyer']."' limit 1 ";
$result = mysqli_query($conn,$query);
$row = mysqli_num_rows($result);
$buyerID;
if($row != NULL && $row > 0){
	$row2 = $result -> fetch_assoc();
	$buyerID = $row2['userID'];
}

			if($_POST){
				if($levels!='' && $wallet!=''){
					if($levels==$row1['level'] && $wallet==$row1['buyer']){
						echo'			<tr role="row">
								<td>'.date('m/d/Y', $row1['timestamp']).'</td>
								<td>'.($row1['amount'] / 1000000000000000000).'</td>
								<td>
								<a href="https://etherscan.io/address/'.$row1['buyer'].'" target="new"> '.$row1['buyer'].' </a>
								</td>
								<td>'.$buyerID.'</td>
								<td>'.$row1['level'].'</td>
							</tr>
				';
					}
				}elseif($levels!='' && $wallet==''){
					if($levels==$row1['level']){
						echo'			<tr role="row">
								<td>'.date('m/d/Y', $row1['timestamp']).'</td>
								<td>'.($row1['amount'] / 1000000000000000000).'</td>
								<td>
								<a href="https://etherscan.io/address/'.$row1['buyer'].'" target="new"> '.$row1['buyer'].' </a>
								</td>
								<td>'.$buyerID.'</td>
								<td>'.$row1['level'].'</td>
							</tr>
				';
					}
				}elseif($levels=='' && $wallet!=''){
					if($wallet==$row1['buyer']){
						echo'			<tr role="row">
								<td>'.date('m/d/Y', $row1['timestamp']).'</td>
								<td>'.($row1['amount'] / 1000000000000000000).'</td>
								<td>
								<a href="https://etherscan.io/address/'.$row1['buyer'].'" target="new"> '.$row1['buyer'].' </a>
								</td>
								<td>'.$buyerID.'</td>
								<td>'.$row1['level'].'</td>
							</tr>
				';
					}
				}else{
					echo'			<tr role="row">
								<td>'.date('m/d/Y', $row1['timestamp']).'</td>
								<td>'.($row1['amount'] / 1000000000000000000).'</td>
								<td>
								<a href="https://etherscan.io/address/'.$row1['buyer'].'" target="new"> '.$row1['buyer'].' </a>
								</td>
								<td>'.$buyerID.'</td>
								<td>'.$row1['level'].'</td>
							</tr>
				';
				}
			}else{
		

				echo'			<tr role="row">
								<td>'.date('m/d/Y', $row1['timestamp']).'</td>
								<td>'.($row1['amount'] / 1000000000000000000).'</td>
								<td>
								<a href="https://etherscan.io/address/'.$row1['buyer'].'" target="new"> '.$row1['buyer'].' </a>
								</td>
								<td>'.$buyerID.'</td>
								<td>'.$row1['level'].'</td>
							</tr>
				';	

			}
	}
}



				


?>					
						</tbody>
					
                    </table>
                </div>
                <div class="pagination_wrapper">
                                    </div>
            </div>
        </div>
    </div>
</div>
<script>
window.addEventListener('DOMContentLoaded', function () {
    let displayFilter = storage('page.stats');
    if(displayFilter == '1' || displayFilter == null) {
        $('.filter-wrapper').show();
    } else {
        $('.filter-wrapper').hide();
    }
    $('[data-spoiler=".filter-wrapper"]').click(function () {
        storageTrigger('page.stats');
    })
});
</script>            
        </div>
    </div>
</div>

<div class="text-center mb-3">
    <!-- Toggle button -->
    <div class="button-con">
      <label for='cb1'>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="dayIcon" x="0px" y="0px" viewBox="0 0 35 35" style="enable-background:new 0 0 35 35;" xml:space="preserve">
          <g id="Sun">
            <g>
              <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M6,17.5C6,16.672,5.328,16,4.5,16h-3C0.672,16,0,16.672,0,17.5    S0.672,19,1.5,19h3C5.328,19,6,18.328,6,17.5z M7.5,26c-0.414,0-0.789,0.168-1.061,0.439l-2,2C4.168,28.711,4,29.086,4,29.5    C4,30.328,4.671,31,5.5,31c0.414,0,0.789-0.168,1.06-0.44l2-2C8.832,28.289,9,27.914,9,27.5C9,26.672,8.329,26,7.5,26z M17.5,6    C18.329,6,19,5.328,19,4.5v-3C19,0.672,18.329,0,17.5,0S16,0.672,16,1.5v3C16,5.328,16.671,6,17.5,6z M27.5,9    c0.414,0,0.789-0.168,1.06-0.439l2-2C30.832,6.289,31,5.914,31,5.5C31,4.672,30.329,4,29.5,4c-0.414,0-0.789,0.168-1.061,0.44    l-2,2C26.168,6.711,26,7.086,26,7.5C26,8.328,26.671,9,27.5,9z M6.439,8.561C6.711,8.832,7.086,9,7.5,9C8.328,9,9,8.328,9,7.5    c0-0.414-0.168-0.789-0.439-1.061l-2-2C6.289,4.168,5.914,4,5.5,4C4.672,4,4,4.672,4,5.5c0,0.414,0.168,0.789,0.439,1.06    L6.439,8.561z M33.5,16h-3c-0.828,0-1.5,0.672-1.5,1.5s0.672,1.5,1.5,1.5h3c0.828,0,1.5-0.672,1.5-1.5S34.328,16,33.5,16z     M28.561,26.439C28.289,26.168,27.914,26,27.5,26c-0.828,0-1.5,0.672-1.5,1.5c0,0.414,0.168,0.789,0.439,1.06l2,2    C28.711,30.832,29.086,31,29.5,31c0.828,0,1.5-0.672,1.5-1.5c0-0.414-0.168-0.789-0.439-1.061L28.561,26.439z M17.5,29    c-0.829,0-1.5,0.672-1.5,1.5v3c0,0.828,0.671,1.5,1.5,1.5s1.5-0.672,1.5-1.5v-3C19,29.672,18.329,29,17.5,29z M17.5,7    C11.71,7,7,11.71,7,17.5S11.71,28,17.5,28S28,23.29,28,17.5S23.29,7,17.5,7z M17.5,25c-4.136,0-7.5-3.364-7.5-7.5    c0-4.136,3.364-7.5,7.5-7.5c4.136,0,7.5,3.364,7.5,7.5C25,21.636,21.636,25,17.5,25z" />
            </g>
          </g>
        </svg>
      </label>
      <input class='toggle' id='cb1' type='checkbox' >
      <label class='toggle-button' for='cb1'></label>
      <label for='cb1'>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="nightIcon" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
          <path d="M96.76,66.458c-0.853-0.852-2.15-1.064-3.23-0.534c-6.063,2.991-12.858,4.571-19.655,4.571  C62.022,70.495,50.88,65.88,42.5,57.5C29.043,44.043,25.658,23.536,34.076,6.47c0.532-1.08,0.318-2.379-0.534-3.23  c-0.851-0.852-2.15-1.064-3.23-0.534c-4.918,2.427-9.375,5.619-13.246,9.491c-9.447,9.447-14.65,22.008-14.65,35.369  c0,13.36,5.203,25.921,14.65,35.368s22.008,14.65,35.368,14.65c13.361,0,25.921-5.203,35.369-14.65  c3.872-3.871,7.064-8.328,9.491-13.246C97.826,68.608,97.611,67.309,96.76,66.458z" />
        </svg>
      </label>
    </div>
    <script>
        // Enable Dark Theme
        window.addEventListener('DOMContentLoaded', function () {
            $('#cb1').click(function () {
                if($(this).prop('checked')) {
                    location.href = '?theme=dark';
                } else {
                    location.href = '?theme=default';
                }
            })
        });
    </script>
    <!-- end toggle button -->
</div>

<div id="Notice"></div>
<script>
var config = {
    site: {
        domain:   location.hostname,
        protocol: location.protocol + '//',
        hostname: location.hostname,
		//link: 'https://lk.forsage.io/',
        link: '<?php echo SITE_URL;?>',
        course: {
            value: `ETH_USD`,
            symbol: `$`,
        },
    },
    user: {
        refkey: 'vpat19',
        address: '0x948e5f339942f9f6cf417c5fe6de73ef6059bd8b',
        isAuthSecure: false,
        sid: '2b2fd7148b32c82b6c700573550e5ffe',
    },
    lang: {
        /* contract.js */
        buyLevel                 : `Confirm the purchase`,
        notDetectedWallet        : `The Ethereum wallet is Not detected on your browser.`,
        unblockWallet            : `Unlock the wallet for a transaction`,
        notActiveWallet          : `Ethereum wallet is not active`,
        errorSendingTransaction  : `Error sending transaction: `,
        transactionSend          : `The transaction has been sent! Please wait for confirmation of the network.`,
        confirmTransaction       : `Confirm the transaction in your Ethereum wallet`,
        errorReadSmartContract   : `Read error SmartContract`,
        uplineNotRegistered      : `Your upline is not registered`,
        userNotExists            : `The user is not registered`,
        authError                : `Authorization error`,
        
        /* common.js */
        copied                   : `Copied`,

        // Сокеты события
        'ws-regLevel_0'          : `Joined ID:{user_id}`,
        'ws-regLevel_1'          : `Joined ID:{user_id}. You are on the right way!`,
        'ws-regLevel_2'          : `Meet the new member ID:{user_id}.`,
        'ws-regLevel_3'          : `New user ID:{user_id}. Welcome to Forsage!`,
        'ws-newUserPlace'        : `ID:{user_id} earned {price_level} {crypto_name} (\${currency_usd}) in the {matrix}`,
        'ws-upgrade'             : `ID:{user_id} buy {level} slot in {matrix} from ID:{ref_id}.`,
        'ws-reinvest'            : `ID:{user_id} was auto-reinvested in slot {level} ({matrix})`,
        'ws-missedEthReceive'    : `ID:{user_id} missed profit {price_level} {crypto_name} (\${currency_usd}). You must perform the upgrade in ({matrix})`,
        'ws-sentExtraEthDividends':`ID:{user_id} received a bonus {price_level} {crypto_name} (\${currency_usd})`,
        'ws-cannotSendMoneyEvent': `ID:{user_id} error getting translation`,
        'ws-leadingPartner'      : `ID:{user_id} missed profit {price_level} {crypto_name} (\${currency_usd}) from (ID:{u_id}) for area # {level} ({matrix})`,
        'ws-leadingPartnerToUpline':`ID:{u_id} overtook its parent ID is:{user_id} in the matrix {matrix} with area # {level}`,
        'ws-leadingPlacePurchase': `ID:{user_id} ahead of your inviter (ID:{up_id}) for area # {level} ({matrix})`,

        // Скрипт с выводом даты отсчета времени
        'elt-years_0'            : `year`,
        'elt-years_1'            : `year`,
        'elt-years_2'            : `years`,
        'elt-months_0'           : `a month`,
        'elt-months_1'           : `months`,
        'elt-months_2'           : `months`,
        'elt-days_0'             : `day`,
        'elt-days_1'             : `day`,
        'elt-days_2'             : `days`,
        'elt-hours_0'            : `hour`,
        'elt-hours_1'            : `hours`,
        'elt-hours_2'            : `hours`,
        'elt-minutes_0'          : `min`,
        'elt-minutes_1'          : `min`,
        'elt-minutes_2'          : `min`,
        'elt-minutes_3'          : `a minute`,
        'elt-seconds_0'          : `second`,
        'elt-seconds_1'          : `seconds`,
        'elt-seconds_2'          : `seconds`,
        'elt-seconds_3'          : `second`,
        'elt-end'                : ` ago`,
        'elt-freshly'            : `just`,
        'elt-deadline'           : `time left`,
        'elt-after'              : `through `,
    },
    locked: {
        buyLevel      : ``,
        authorization : ``,
        registration  : ``,
    },
    permissions: {
        buyLevel      : `0`,
    },
    isFramed: null,
    isMobile: false,
    haveWallet: window.ethereum || window.web3,
};

// Получить основной домен
let arr = config.site.domain.split('.');
if(arr.length > 2) {
    config.site.domain = arr.slice(arr.length - 2).join('.')
}

// Запущен ли сайт в теге iframe
try {
  config.isFramed = window != window.top || document != top.document || self.location != top.location;
} catch (e) {
  config.isFramed = true;
}
</script>




  <script type="text/javascript" src="assets_s/js/jquery-3.5.1.js" ></script>
			   
  <script src="global/vendor/datatables.net/jquery.dataTablesfd53.js?v4.0.1"></script>
  <script src="global/vendor/datatables.net-bs4/dataTables.bootstrap4fd53.js?v4.0.1"></script>
  <script src="global/vendor/datatables.net-responsive/dataTables.responsive.minfd53.js?v4.0.1"></script>
  <script src="global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.minfd53.js?v4.0.1"></script>
               <script>$(document).ready(function() {
                  $.noConflict();
                  var table = $('#example').DataTable( {
                     responsive: true
                  } );
                  
                  new $.fn.dataTable.FixedHeader( table );
                  } );
               </script>
<script src="assets_s/Decentralized/js/jquery.min.js"></script>
<script src="assets_s/Decentralized/js/vue.min.js"></script>
<script src="assets_s/Decentralized/js/socket.io.js"></script>
<script src="assets_s/Decentralized/js/jquery.fancybox.min.js"></script>
<script src="assets_s/Decentralized/js/common.js"></script>
<script src="assets_s/Decentralized/js/contract.js"></script>
<script src="assets_s/Decentralized/js/cabinet.js"></script>
<div class="require-auth">
    Purchase in preview mode is not available! Please please login with your Ethereum wallet.<br>
    <br>
    <div>
                    <button class="btn btn-success" id="reauth">
                Authorization            </button>
            </div>
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym");

   ym(57866482, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/57866482" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>