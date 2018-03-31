net stop apache
cd C:\Program Files\Volicon\Apache2.4\conf
rename httpd.conf httpd-work.conf
rename httpd-ts.conf httpd.conf
net start apache