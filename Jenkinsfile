pipeline {
    agent any

    environment {
        // Define global variables if needed, e.g., paths or credentials
        NODE_HOME = '/usr/local/bin/node'
        NPM_HOME = '/usr/local/bin/npm'
    }

    stages {
        stage('Clone Repositories') {
            steps {
                script {
                    // Clone the main repository containing the Angular, React, and Symfony projects
                    git url: 'https://github.com/shahinrahmannaim/sym-angular-vde.git', branch: 'main'
                }
            }
        }

        stage('Build Angular') {
            steps {
                dir('angular-sym') {
                    script {
                        // Ensure that Node.js and npm are available, using a specific version if required
                        sh '''#!/bin/bash
                            if ! command -v npm &> /dev/null
                            then
                                echo "npm could not be found, installing Node.js and npm"
                                curl -sL https://deb.nodesource.com/setup_16.x | bash -
                                apt-get install -y nodejs
                            fi
                            npm install
                            npm run build
                        '''
                    }
                }
            }
        }


        stage('Build Symfony') {
            steps {
                dir('symfony-7') {
                    script {
                        // Ensure Composer is installed and handle the Symfony setup
                        sh '''#!/bin/bash
                            if ! command -v composer &> /dev/null
                            then
                                echo "Composer could not be found, installing Composer"
                                curl -sS https://getcomposer.org/installer | php
                                mv composer.phar /usr/local/bin/composer
                            fi
                            composer install
                            php bin/console cache:clear
                        '''
                    }
                }
            }
        }

        stage('Deploy') {
            steps {
                script {
                    // Example: Deploying to a server or Docker, can be customized further
                    echo "Deploying application..."
                    sh './deploy.sh'  // Make sure deploy.sh is configured to deploy your app
                }
            }
        }
    }

    post {
        success {
            echo 'Pipeline completed successfully!'
        }
        failure {
            echo 'Pipeline failed. Please check the logs for details.'
        }
    }
}
