## Prerequisits

  * A [GitHub](https://www.github.com) account
  * Sparkleshare installed on your system
  * Requires Git >= v1.7.12


## Install Git on Windows

  1. Download and install from http://www.git-scm.com

#### Generate SSH Key

  1. Launch "Git Bash"
  2. Run the following:
  
      $ ssh-keygen.exe -r rsa -C "your_email@example.com"


## Install Git on Ubuntu

To get the latest version of Git, add the stalbe PPA and install Git:

    $ sudo apt-add-repository ppa:git-core/ppa
    $ sudo apt-get update && sudo apt-get install git
    
To generate an SSH key, run the following from a terminal:

    $ ssh-keygen -r rsa -C "your_email@example.com"


## Add Your SSH Key to GitHub

  1. Copy your SSH key to your clipboard but running
  
    $ clip < ~/.ssh/id_rsa.pub
    
  2. Go to your [Account Settings](https://github.com/settings)
  3. Click [SSH Keys](https://github.com/settings) in the left sidebar
  4. Click "Add SSH key"
  5. Paste your key into the "Key" field
  6. Click "Add key"
  7. Confirm the action by entering your GitHub password

## Install Sparkleshare

#### Windows

  1. Download and install the .msi from http://www.sparkleshare.org

#### Linux

**NOTE:** Sparkleshare is available in the Ubuntu repositories, however this version is
rather out of date and we recommend installing from source.

  1. Download the Sparkleshare source code from http://www.sparkleshare.org
  2. Follow instructions [here](https://github.com/hbons/SparkleShare/blob/master/SparkleShare/Linux/README.md)


## Add a Project to Spakleshare

  1. From the Sprakleshare context menu, select "Add hosted project..."
  2. Select GitHub as the project host
  3. Use "PHX2600/<project_name>" for the remote path
  4. Click the Add button