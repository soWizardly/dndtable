net stop apache
cd C:\Program Files\Volicon\Apache2.4\conf
rename httpd.conf httpd-ts.conf
rename httpd-work.conf httpd.conf
net start apache