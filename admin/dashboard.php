<?php include_once 'inc/config.php'; 
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
   // echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
} else {
   
	header('Location: index.php');
}

include 'inc/Donate.php';
$donate = new Donate();

$today_donation = $donate->gettodayDonation();
$curr_donation = $donate->getcurrmonthDonation();

$total_donation = $donate->gettotalDonation();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="https://www.thevibes.academy/images/favicon.png" type="image/x-icon">
</head>

<body>

    <section class="fullContent">
        <header class="wpadminbar">

            <div class="headerMenu">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path fill="currentColor"
                        d="m16 8.5l1.53 1.53l-1.06 1.06L10 4.62l-6.47 6.47l-1.06-1.06L10 2.5l4 4v-2h2v4zm-6-2.46l6 5.99V18H4v-5.97zM12 17v-5H8v5h4z" />
                </svg>The Vibes Academy
            </div>
            <div class="headerMenu">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path fill="currentColor"
                        d="M10 9.25c-2.27 0-2.73-3.44-2.73-3.44C7 4.02 7.82 2 9.97 2c2.16 0 2.98 2.02 2.71 3.81c0 0-.41 3.44-2.68 3.44zm0 2.57L12.72 10c2.39 0 4.52 2.33 4.52 4.53v2.49s-3.65 1.13-7.24 1.13c-3.65 0-7.24-1.13-7.24-1.13v-2.49c0-2.25 1.94-4.48 4.47-4.48z" />
                </svg> <a href="logout.php">Hi, Log out</a>
            </div>

        </header>
        <div class="FullContentDesign">
            <div class="sidebarMenu">
                <?php include_once 'inc/menu.php'; ?>
            </div>
            <div class="ContentViwer">
                <div class="FinalContent">
                    <h1>Dashboard</h1>
                    <div class="message">
                        <p>
                           Hi, Welcome to The Vibes Academy</p>
                    </div>

                    <div class="row">
                        <div class="col">
                           <div class="postbox">
                               <h1><?php echo number_format((float)$today_donation['total'], 2, '.', ',');?></h1>
                                <p>Today Revenue</p>
                           </div>
                       </div>
                       <div class="col">
                           <div class="postbox">
                               <h1><?php echo number_format((float)$curr_donation['total'], 2, '.', ',');?></h1>
                                <p>Current Month Revenue</p>
                            </div>
                        </div>
                        <div class="col">
                           <div class="postbox">
                               <h1><?php echo number_format((float)$total_donation['total'], 2, '.', ',');?></h1>
                              <p>Total Revenue</p>
                            </div>
                      </div>
                    </div>
                    
                    
                   
                    
                </div>

            </div>
        </div>

    </section>

</body>
<?php include_once 'inc/footer.php'; ?>
</html>