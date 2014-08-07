#!/usr/bin/bash
path=${PWD}
#sudo ln -s $path/safran.php /usr/bin/safran
sudo cp ./safran.php /usr/bin/safran
sudo chmod +x /usr/bin/safran
echo "Installation complete"