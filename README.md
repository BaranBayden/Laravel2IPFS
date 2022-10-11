# Laravel2IPFS
Laravel2IPFS is a plug-in that enables applications developed with Laravel infrastructure to be backed up to IPFS. There is also a feature that allow you to quickly restore from your backups in case of any disaster.

# Installation and Usage
Installation and use are very simple. 
- Add the Laravel2IPFS module to your Laravel project directory. 
- Fill the following section in the Laravel2IPFS/config/backup-manager.php/ file according to your Web3Storage API information.

 ```
 ipfs' => [
        'type' => 'Web3Storage',
        'api-endp'    => env('https://api.web3.storage'),
        'name' => env('WEB3S_NAME'),
        'token' => env('WEB3S_TOKEN'),
    ],  
```

```name: Your API Token's name``` <br>
```token: API Token given by Web3Storage```

After that you need to create a Cronjob for backup.

* Example: 24 hour scheduled cronjob
<br> ```php artisan db:backup --database=mysql --destination=ipfs --destinationPath=project --timestamp="d-m-Y" --compression=gzip```

The destination is entered as ipfs in this command, it can be changed to ```local``` if desired.

That's it, have a nice developing process with Laravel2IPFS!

# Disclaimer

Laravel2IPFS is an open source published project. No safety audits have been made and nothing definite can be said about its stability. Therefore, Laravel2IPFS and its developer do not promise that the promise will always be fulfilled without any problems. Laravel2IPFS, Baran Bayden and any partner used in the application cannot be held responsible for any material or moral damage that may occur during the use of Laravel2IPFS. User must accept and use all risks and responsibility when using Laravel2IPFS

# About Last Update
The IPFS package was updated and all the codes in the file were scanned and the whole project was republished.
