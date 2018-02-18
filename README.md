# Minecraft-RCON-Console
I needed a plugin-less web console for my Minecraft servers no matter what type of server they were, so I decided to make this one using Minecraft's built-in RCON and query abilities that come shipped with every server.

I saw <a href="https://github.com/ekaomk">ekaomk's</a> <a href="https://github.com/ekaomk/Minecraft-RCON-Console">Minecraft-RCON-Console</a> and decided that it would be fun to see if I could make something that looked both more sleek and modern and performed better. Here's what I came up with!

This project uses <a href="http://materializecss.com/">Materialize</a> to use Google's beautiful Material Design. It also uses <a href="https://github.com/thedudeguy">thedudeguy's</a> <a href="https://github.com/thedudeguy/PHP-Minecraft-Rcon">PHP-Minecraft-Rcon</a> library for rcon requests. Finally, it uses <a href="https://github.com/xPaw">xPaw's</a> <a href="https://github.com/xPaw/PHP-Minecraft-Query">PHP-Minecraft-Query</a> library for query requests.

## Setup:
### Requirements:
1. PHP (duh)
2. A Minecraft server with query and rcon setup

### Config Setup:
Open ```src/config.php``` and enter your rcon credentials and query information.