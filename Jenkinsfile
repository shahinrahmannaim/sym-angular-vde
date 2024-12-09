pipeline {
    agent any
    
    stages {
        stage('Clone Repositories') {
            steps {
                // Clone all repositories
                git url: 'https://github.com/shahinrahmannaim/sym-angular-vde.git', branch: 'main'
                
            }
        }
        stage('Build Angular') {
            steps {
                dir('angular-sym') {
                    sh 'npm install'
                    sh 'npm run build'
                }
            }
        }
        stage('Build React') {
            steps {
                dir('react-sym') {
                    sh 'npm install'
                    sh 'npm run build'
                }
            }
        }
        stage('Build Symfony') {
            steps {
                dir('symfony-7') {
                    sh 'composer install'
                    sh 'php bin/console cache:clear'
                }
            }
        }
        stage('Deploy') {
            steps {
                // Example: Deploying to a server or Docker
                sh './deploy.sh'
            }
        }
    }
}
