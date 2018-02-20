<?php
require_once "src/Rcon.php";
require_once "src/config.php";

// Connect to Rcon server
use Thedudeguy\Rcon;

$rcon = new Rcon($rconHost, $rconPort, $rconPassword, $rconTimeout);

@$rcon->connect();
$rcon->sendCommand("say Hello World!");

if ($rcon->isConnected()) {
  echo "Connected successfully.";
} else if (!$rcon->isConnected()) {
  echo "Failed to connect.";
}
?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="src/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <div class="row">
        <nav>
          <div class="nav-wrapper <?php echo $pageNavbarColor; ?>">
            <div class="col s12">
              <a href="#" class="brand-logo"><?php echo $pageLogo; ?></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="src/redirect.php?reload=true">Reload</a></li>
                <li><a href="src/redirect.php?stop=true">Stop</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <div class="row">
          <!--This is the main body-->
          <div class="col s12">
            <div class="col s4">
              <div class="card-panel hoverable green"> <!--Make the colors change based on current values-->
                <span class="card-title">Server Status</span><br>
                <span class="white-text">Online</span>
              </div>
            </div>
            <div class="col s4">
              <div class="card-panel hoverable green">
                <span class="card-title">Current Players</span><br>
                <span class="white-text">12/1000</span> <!--Make this number live-->
              </div>
            </div>
            <div class="col s4">
              <div class="card-panel hoverable green">
                <span class="card-title">Server Version</span><br>
                <span class="white-text">1.12.2</span>
              </div>
            </div>
          </div>
          <div class="col s12">
            <div class="card hoverable <?php echo $pageConsoleColor; ?>">
              <div class="card-content white-text">
                <span class="card-title">Console</span>
                <table class="striped responsive">
                  <tbody>
                    <tr>
                      <td>say Hi</td>
                    </tr>
                    <tr>
                      <td>Said Hi</td>
                    </tr>
                    <tr>
                      <td>Hallo thar fwend</td>
                    </tr>
                  </tbody>
                </table>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Command</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="row">
        <footer class="page-footer <?php echo $pageFooterColor; ?>">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text"><?php echo $pageLogo; ?></h5>
                <p class="grey-text text-lighten-4">Made with ❤️ by Muhsinun C.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://github.com/MuhsinunCool" target="_blank">MuhsinunC's GitHub Profile</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://github.com/MuhsinunCool/Minecraft-RCON-Console" target="_blank">GitHub Repository</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Copyright <a href="http://muhsinunc.ml/" target="_blank" class="white-text">MuhsinunC</a>
            </div>
          </div>
        </footer>
      </div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="src/js/materialize.min.js"></script>
    </body>
  </html>