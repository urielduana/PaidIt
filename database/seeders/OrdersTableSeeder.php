<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert(['total' => '1533', 'description' => 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.' ,'Customer_id' => '13']);
        DB::table('orders')->insert(['total' => '1812', 'description' => 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante.' ,'Customer_id' => '74']);
        DB::table('orders')->insert(['total' => '792', 'description' => 'Maecenas tincidunt lacus at velit.' ,'Customer_id' => '45']);
        DB::table('orders')->insert(['total' => '977', 'description' => 'Donec semper sapien a libero. Nam dui. Proin leo odio, porttitor id, consequat in, consequat ut, nulla.' ,'Customer_id' => '69']);
        DB::table('orders')->insert(['total' => '1721', 'description' => 'Suspendisse accumsan tortor quis turpis. Sed ante. Vivamus tortor.' ,'Customer_id' => '8']);
        DB::table('orders')->insert(['total' => '1459', 'description' => 'Etiam pretium iaculis justo. In hac habitasse platea dictumst.' ,'Customer_id' => '46']);
        DB::table('orders')->insert(['total' => '923', 'description' => 'Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue.' ,'Customer_id' => '33']);
        DB::table('orders')->insert(['total' => '1913', 'description' => 'Vestibulum rutrum rutrum neque.' ,'Customer_id' => '62']);
        DB::table('orders')->insert(['total' => '1184', 'description' => 'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue.' ,'Customer_id' => '8']);
        DB::table('orders')->insert(['total' => '117', 'description' => 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus.' ,'Customer_id' => '52']);
        DB::table('orders')->insert(['total' => '829', 'description' => 'Aenean auctor gravida sem. Praesent id massa id nisl venenatis lacinia.' ,'Customer_id' => '60']);
        DB::table('orders')->insert(['total' => '542', 'description' => 'Cras pellentesque volutpat dui.' ,'Customer_id' => '15']);
        DB::table('orders')->insert(['total' => '285', 'description' => 'Nunc rhoncus dui vel sem. Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci.' ,'Customer_id' => '4']);
        DB::table('orders')->insert(['total' => '1811', 'description' => 'Nulla tellus. In sagittis dui vel nisl.' ,'Customer_id' => '33']);
        DB::table('orders')->insert(['total' => '1328', 'description' => 'Nulla suscipit ligula in lacus. Curabitur at ipsum ac tellus semper interdum.' ,'Customer_id' => '36']);
        DB::table('orders')->insert(['total' => '956', 'description' => 'Morbi quis tortor id nulla ultrices aliquet. Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam.' ,'Customer_id' => '21']);
        DB::table('orders')->insert(['total' => '789', 'description' => 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.' ,'Customer_id' => '4']);
        DB::table('orders')->insert(['total' => '1039', 'description' => 'Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.' ,'Customer_id' => '46']);
        DB::table('orders')->insert(['total' => '1047', 'description' => 'Morbi non quam nec dui luctus rutrum. Nulla tellus.' ,'Customer_id' => '9']);
        DB::table('orders')->insert(['total' => '1490', 'description' => 'Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh. Quisque id justo sit amet sapien dignissim vestibulum.' ,'Customer_id' => '21']);
        DB::table('orders')->insert(['total' => '104', 'description' => 'Praesent blandit. Nam nulla.' ,'Customer_id' => '8']);
        DB::table('orders')->insert(['total' => '1638', 'description' => 'Cras non velit nec nisi vulputate nonummy.' ,'Customer_id' => '30']);
        DB::table('orders')->insert(['total' => '1262', 'description' => 'Mauris lacinia sapien quis libero. Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum.' ,'Customer_id' => '69']);
        DB::table('orders')->insert(['total' => '109', 'description' => 'Ut at dolor quis odio consequat varius. Integer ac leo. Pellentesque ultrices mattis odio.' ,'Customer_id' => '45']);
        DB::table('orders')->insert(['total' => '202', 'description' => 'Morbi ut odio.' ,'Customer_id' => '32']);
        DB::table('orders')->insert(['total' => '49', 'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue.' ,'Customer_id' => '58']);
        DB::table('orders')->insert(['total' => '1469', 'description' => 'Mauris ullamcorper purus sit amet nulla.' ,'Customer_id' => '56']);
        DB::table('orders')->insert(['total' => '1226', 'description' => 'Nulla nisl.' ,'Customer_id' => '36']);
        DB::table('orders')->insert(['total' => '474', 'description' => 'Curabitur convallis. Duis consequat dui nec nisi volutpat eleifend.' ,'Customer_id' => '44']);
        DB::table('orders')->insert(['total' => '958', 'description' => 'Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.' ,'Customer_id' => '40']);
        DB::table('orders')->insert(['total' => '1285', 'description' => 'Mauris lacinia sapien quis libero. Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum.' ,'Customer_id' => '27']);
        DB::table('orders')->insert(['total' => '272', 'description' => 'Integer ac neque. Duis bibendum. Morbi non quam nec dui luctus rutrum.' ,'Customer_id' => '21']);
        DB::table('orders')->insert(['total' => '769', 'description' => 'Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus. Suspendisse potenti.' ,'Customer_id' => '47']);
        DB::table('orders')->insert(['total' => '405', 'description' => 'Integer ac leo. Pellentesque ultrices mattis odio.' ,'Customer_id' => '51']);
        DB::table('orders')->insert(['total' => '50', 'description' => 'Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus. Pellentesque at nulla.' ,'Customer_id' => '11']);
        DB::table('orders')->insert(['total' => '1292', 'description' => 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.' ,'Customer_id' => '72']);
        DB::table('orders')->insert(['total' => '456', 'description' => 'Pellentesque ultrices mattis odio. Donec vitae nisi. Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla.' ,'Customer_id' => '58']);
        DB::table('orders')->insert(['total' => '1741', 'description' => 'Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.' ,'Customer_id' => '30']);
        DB::table('orders')->insert(['total' => '262', 'description' => 'Aliquam quis turpis eget elit sodales scelerisque.' ,'Customer_id' => '14']);
        DB::table('orders')->insert(['total' => '1244', 'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.' ,'Customer_id' => '57']);
        DB::table('orders')->insert(['total' => '314', 'description' => 'Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo.' ,'Customer_id' => '16']);
        DB::table('orders')->insert(['total' => '979', 'description' => 'Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.' ,'Customer_id' => '54']);
        DB::table('orders')->insert(['total' => '333', 'description' => 'Mauris lacinia sapien quis libero.' ,'Customer_id' => '18']);
        DB::table('orders')->insert(['total' => '1547', 'description' => 'Vestibulum sed magna at nunc commodo placerat. Praesent blandit.' ,'Customer_id' => '73']);
        DB::table('orders')->insert(['total' => '1320', 'description' => 'Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh. Quisque id justo sit amet sapien dignissim vestibulum.' ,'Customer_id' => '70']);
        DB::table('orders')->insert(['total' => '1301', 'description' => 'Phasellus sit amet erat. Nulla tempus.' ,'Customer_id' => '60']);
        DB::table('orders')->insert(['total' => '127', 'description' => 'Cras in purus eu magna vulputate luctus.' ,'Customer_id' => '37']);
        DB::table('orders')->insert(['total' => '67', 'description' => 'Duis ac nibh.' ,'Customer_id' => '59']);
        DB::table('orders')->insert(['total' => '1854', 'description' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est.' ,'Customer_id' => '15']);
        DB::table('orders')->insert(['total' => '641', 'description' => 'In hac habitasse platea dictumst.' ,'Customer_id' => '66']);
        DB::table('orders')->insert(['total' => '678', 'description' => 'Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.' ,'Customer_id' => '29']);
        DB::table('orders')->insert(['total' => '1637', 'description' => 'Nulla tellus.' ,'Customer_id' => '37']);
        DB::table('orders')->insert(['total' => '1259', 'description' => 'In quis justo.' ,'Customer_id' => '66']);
        DB::table('orders')->insert(['total' => '1925', 'description' => 'Aliquam non mauris. Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet.' ,'Customer_id' => '21']);
        DB::table('orders')->insert(['total' => '1665', 'description' => 'Proin eu mi. Nulla ac enim.' ,'Customer_id' => '57']);
        DB::table('orders')->insert(['total' => '1011', 'description' => 'Donec dapibus. Duis at velit eu est congue elementum. In hac habitasse platea dictumst.' ,'Customer_id' => '38']);
        DB::table('orders')->insert(['total' => '1862', 'description' => 'Nulla suscipit ligula in lacus.' ,'Customer_id' => '58']);
        DB::table('orders')->insert(['total' => '1664', 'description' => 'Nam nulla.' ,'Customer_id' => '33']);
        DB::table('orders')->insert(['total' => '845', 'description' => 'Suspendisse potenti. In eleifend quam a odio.' ,'Customer_id' => '73']);
        DB::table('orders')->insert(['total' => '970', 'description' => 'Ut at dolor quis odio consequat varius. Integer ac leo. Pellentesque ultrices mattis odio.' ,'Customer_id' => '27']);
        DB::table('orders')->insert(['total' => '1802', 'description' => 'Cras in purus eu magna vulputate luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien.' ,'Customer_id' => '6']);
        DB::table('orders')->insert(['total' => '691', 'description' => 'Nunc rhoncus dui vel sem. Sed sagittis.' ,'Customer_id' => '17']);
        DB::table('orders')->insert(['total' => '530', 'description' => 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.' ,'Customer_id' => '5']);
        DB::table('orders')->insert(['total' => '1657', 'description' => 'In congue.' ,'Customer_id' => '14']);
        DB::table('orders')->insert(['total' => '109', 'description' => 'Nunc rhoncus dui vel sem.' ,'Customer_id' => '37']);
        DB::table('orders')->insert(['total' => '210', 'description' => 'Aenean sit amet justo. Morbi ut odio.' ,'Customer_id' => '60']);
        DB::table('orders')->insert(['total' => '343', 'description' => 'Integer tincidunt ante vel ipsum.' ,'Customer_id' => '10']);
        DB::table('orders')->insert(['total' => '351', 'description' => 'Nunc nisl. Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa.' ,'Customer_id' => '16']);
        DB::table('orders')->insert(['total' => '1106', 'description' => 'Morbi a ipsum. Integer a nibh. In quis justo.' ,'Customer_id' => '72']);
        DB::table('orders')->insert(['total' => '1260', 'description' => 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.' ,'Customer_id' => '75']);
        DB::table('orders')->insert(['total' => '350', 'description' => 'Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.' ,'Customer_id' => '35']);
        DB::table('orders')->insert(['total' => '319', 'description' => 'Nullam sit amet turpis elementum ligula vehicula consequat.' ,'Customer_id' => '3']);
        DB::table('orders')->insert(['total' => '587', 'description' => 'Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue.' ,'Customer_id' => '34']);
        DB::table('orders')->insert(['total' => '1940', 'description' => 'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.' ,'Customer_id' => '14']);
        DB::table('orders')->insert(['total' => '582', 'description' => 'Morbi quis tortor id nulla ultrices aliquet.' ,'Customer_id' => '43']);
        DB::table('orders')->insert(['total' => '1564', 'description' => 'Aenean sit amet justo. Morbi ut odio.' ,'Customer_id' => '72']);
        DB::table('orders')->insert(['total' => '1911', 'description' => 'Ut tellus.' ,'Customer_id' => '69']);
        DB::table('orders')->insert(['total' => '1899', 'description' => 'Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem. Fusce consequat.' ,'Customer_id' => '72']);
        DB::table('orders')->insert(['total' => '1149', 'description' => 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.' ,'Customer_id' => '58']);
        DB::table('orders')->insert(['total' => '379', 'description' => 'In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.' ,'Customer_id' => '58']);
        DB::table('orders')->insert(['total' => '499', 'description' => 'Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue.' ,'Customer_id' => '37']);
        DB::table('orders')->insert(['total' => '1159', 'description' => 'Aenean fermentum. Donec ut mauris eget massa tempor convallis.' ,'Customer_id' => '43']);
        DB::table('orders')->insert(['total' => '902', 'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.' ,'Customer_id' => '65']);
        DB::table('orders')->insert(['total' => '230', 'description' => 'Nulla tempus. Vivamus in felis eu sapien cursus vestibulum. Proin eu mi.' ,'Customer_id' => '22']);
        DB::table('orders')->insert(['total' => '1356', 'description' => 'Morbi vel lectus in quam fringilla rhoncus.' ,'Customer_id' => '46']);
        DB::table('orders')->insert(['total' => '1767', 'description' => 'In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem. Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy.' ,'Customer_id' => '9']);
        DB::table('orders')->insert(['total' => '1042', 'description' => 'Aenean auctor gravida sem.' ,'Customer_id' => '53']);
        DB::table('orders')->insert(['total' => '456', 'description' => 'Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus. Suspendisse potenti.' ,'Customer_id' => '5']);
        DB::table('orders')->insert(['total' => '1343', 'description' => 'Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl. Aenean lectus.' ,'Customer_id' => '40']);
        DB::table('orders')->insert(['total' => '1999', 'description' => 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante.' ,'Customer_id' => '41']);
        DB::table('orders')->insert(['total' => '953', 'description' => 'Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci.' ,'Customer_id' => '28']);
        DB::table('orders')->insert(['total' => '494', 'description' => 'Etiam pretium iaculis justo.' ,'Customer_id' => '6']);
        DB::table('orders')->insert(['total' => '1817', 'description' => 'Proin interdum mauris non ligula pellentesque ultrices.' ,'Customer_id' => '16']);
        DB::table('orders')->insert(['total' => '649', 'description' => 'Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci.' ,'Customer_id' => '20']);
        DB::table('orders')->insert(['total' => '1070', 'description' => 'Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus. Pellentesque at nulla.' ,'Customer_id' => '31']);
        DB::table('orders')->insert(['total' => '1396', 'description' => 'Donec vitae nisi.' ,'Customer_id' => '63']);
        DB::table('orders')->insert(['total' => '704', 'description' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est.' ,'Customer_id' => '41']);
        DB::table('orders')->insert(['total' => '270', 'description' => 'In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.' ,'Customer_id' => '67']);
        DB::table('orders')->insert(['total' => '291', 'description' => 'Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.' ,'Customer_id' => '49']);
        DB::table('orders')->insert(['total' => '1326', 'description' => 'Suspendisse accumsan tortor quis turpis.' ,'Customer_id' => '64']);
        
    }
}
