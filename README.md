## Kamaro Point Of Sale
Affordable, complete platform for running a shop. it manages sales, prints receipts, processes payments,manages inventory, reports, and customers without extra hardware.

## What's new
After 3 years of working on the point of sales system which is built on CodeIgniter, I decided to revamp the entire platform and
write a new platform  using Laravel framework which is total powered by API. this will allow the total flexibility and extension of the platform .

## Official dicumentation

Documentation for the entire system can be found on the [Kamaro Lambert Website](http://kamaroly.com/support/#/).

### Contributing To KPOS

**All issues and pull requests should be filed on the [Kamaro Point of Sale](http://github.com/kamaroly/kpos3) repository.**

### LICENCE
The Kamaro Point of Sale software is licensed under the [MIT license](http://opensource.org/licenses/MIT)


 
php artisan migrate --bench="kamaro/customers"  
php artisan migrate --bench="kamaro/item-kits"
php artisan migrate --bench="kamaro/items"  
php artisan migrate --bench="kamaro/locations"
php artisan migrate --bench="kamaro/people" 
php artisan migrate --bench="kamaro/receivings" 
php artisan migrate --bench="kamaro/reports"  
php artisan migrate --bench="kamaro/sales" 
php artisan migrate --bench="kamaro/settings"
php artisan migrate --bench="kamaro/suppliers"
php artisan migrate --bench="kamaro/contracts" 

