<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert(['name' => 'Caf� americano', 'price' => '140.82', 'description' => 'maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta', 'image' => 'nan', 'stock' => '38', 'Item_type_id' => '17', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Capuchino', 'price' => '131.92', 'description' => 'in magna bibendum imperdiet nullam orci pede venenatis non sodales', 'image' => 'nan', 'stock' => '140', 'Item_type_id' => '30', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Latte', 'price' => '314.46', 'description' => 'id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere', 'image' => 'nan', 'stock' => '84', 'Item_type_id' => '12', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'T�', 'price' => '38.33', 'description' => 'vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem', 'image' => 'nan', 'stock' => '101', 'Item_type_id' => '3', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Galletas', 'price' => '31.07', 'description' => 'primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra', 'image' => 'nan', 'stock' => '113', 'Item_type_id' => '28', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Pasteles', 'price' => '429.08', 'description' => 'quam nec dui luctus rutrum nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet at feugiat non pretium quis', 'image' => 'nan', 'stock' => '34', 'Item_type_id' => '29', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'S�ndwiches', 'price' => '338.52', 'description' => 'vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a', 'image' => 'nan', 'stock' => '102', 'Item_type_id' => '23', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Bagels', 'price' => '150.19', 'description' => 'consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere', 'image' => 'nan', 'stock' => '135', 'Item_type_id' => '24', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Donas', 'price' => '158.74', 'description' => 'justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis tristique fusce congue diam id ornare imperdiet sapien urna pretium', 'image' => 'nan', 'stock' => '146', 'Item_type_id' => '22', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Ensaladas', 'price' => '408.58', 'description' => 'tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus', 'image' => 'nan', 'stock' => '105', 'Item_type_id' => '8', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Jugos naturales', 'price' => '176.52', 'description' => 'rutrum nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet at', 'image' => 'nan', 'stock' => '125', 'Item_type_id' => '12', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Batidos', 'price' => '471.04', 'description' => 'ut suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis', 'image' => 'nan', 'stock' => '142', 'Item_type_id' => '11', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Smoothies', 'price' => '356.0', 'description' => 'nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat', 'image' => 'nan', 'stock' => '129', 'Item_type_id' => '10', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Wraps', 'price' => '380.79', 'description' => 'lacinia nisi venenatis tristique fusce congue diam id ornare imperdiet sapien urna pretium nisl ut', 'image' => 'nan', 'stock' => '53', 'Item_type_id' => '5', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Yogur', 'price' => '111.13', 'description' => 'orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt', 'image' => 'nan', 'stock' => '55', 'Item_type_id' => '2', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Frutas', 'price' => '16.84', 'description' => 'hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie', 'image' => 'nan', 'stock' => '132', 'Item_type_id' => '12', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Aguas frescas', 'price' => '61.48', 'description' => 'ullamcorper augue a suscipit nulla elit ac nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac', 'image' => 'nan', 'stock' => '104', 'Item_type_id' => '29', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Chocolates calientes', 'price' => '83.09', 'description' => 'nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget', 'image' => 'nan', 'stock' => '69', 'Item_type_id' => '27', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Tostadas francesas', 'price' => '445.81', 'description' => 'in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam porttitor lacus at turpis donec posuere metus vitae ipsum aliquam non mauris morbi', 'image' => 'nan', 'stock' => '122', 'Item_type_id' => '30', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Huevos revueltos', 'price' => '124.13', 'description' => 'metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt eu felis', 'image' => 'nan', 'stock' => '97', 'Item_type_id' => '4', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Chilaquiles', 'price' => '6.93', 'description' => 'id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie', 'image' => 'nan', 'stock' => '81', 'Item_type_id' => '3', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Hotcakes', 'price' => '61.93', 'description' => 'maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis', 'image' => 'nan', 'stock' => '7', 'Item_type_id' => '15', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Waffles', 'price' => '239.98', 'description' => 'ac neque duis bibendum morbi non quam nec dui luctus rutrum', 'image' => 'nan', 'stock' => '34', 'Item_type_id' => '4', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Omelettes', 'price' => '45.5', 'description' => 'etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla', 'image' => 'nan', 'stock' => '110', 'Item_type_id' => '19', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Croissants', 'price' => '42.79', 'description' => 'ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere', 'image' => 'nan', 'stock' => '46', 'Item_type_id' => '4', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Panini', 'price' => '176.64', 'description' => 'suspendisse ornare consequat lectus in est risus auctor sed tristique in tempus sit amet sem fusce consequat nulla', 'image' => 'nan', 'stock' => '58', 'Item_type_id' => '2', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Pan dulce', 'price' => '460.64', 'description' => 'nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum', 'image' => 'nan', 'stock' => '70', 'Item_type_id' => '20', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Nachos', 'price' => '467.06', 'description' => 'at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum', 'image' => 'nan', 'stock' => '94', 'Item_type_id' => '21', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Papas a la francesa', 'price' => '159.98', 'description' => 'mi in porttitor pede justo eu massa donec dapibus duis at velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis diam erat fermentum', 'image' => 'nan', 'stock' => '42', 'Item_type_id' => '14', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Nuggets de pollo', 'price' => '126.27', 'description' => 'montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum', 'image' => 'nan', 'stock' => '81', 'Item_type_id' => '19', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Hot dogs', 'price' => '473.03', 'description' => 'convallis tortor risus dapibus augue vel accumsan tellus nisi eu', 'image' => 'nan', 'stock' => '100', 'Item_type_id' => '16', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Hamburguesas', 'price' => '457.06', 'description' => 'pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis', 'image' => 'nan', 'stock' => '37', 'Item_type_id' => '3', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Pizza', 'price' => '92.14', 'description' => 'luctus et ultrices posuere cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam', 'image' => 'nan', 'stock' => '100', 'Item_type_id' => '11', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Pita', 'price' => '454.74', 'description' => 'neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet et commodo vulputate', 'image' => 'nan', 'stock' => '50', 'Item_type_id' => '14', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Panini', 'price' => '377.33', 'description' => 'sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus', 'image' => 'nan', 'stock' => '126', 'Item_type_id' => '18', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Fajitas', 'price' => '359.56', 'description' => 'tellus nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer', 'image' => 'nan', 'stock' => '127', 'Item_type_id' => '30', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Burritos', 'price' => '169.32', 'description' => 'feugiat et eros vestibulum ac est lacinia nisi venenatis tristique fusce congue diam id', 'image' => 'nan', 'stock' => '100', 'Item_type_id' => '15', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Tacos', 'price' => '220.61', 'description' => 'morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id', 'image' => 'nan', 'stock' => '13', 'Item_type_id' => '22', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Sopa', 'price' => '118.23', 'description' => 'vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem', 'image' => 'nan', 'stock' => '136', 'Item_type_id' => '4', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Ceviche', 'price' => '256.21', 'description' => 'et magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum', 'image' => 'nan', 'stock' => '27', 'Item_type_id' => '20', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Enchiladas', 'price' => '277.04', 'description' => 'odio cras mi pede malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer', 'image' => 'nan', 'stock' => '52', 'Item_type_id' => '23', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Pambazos', 'price' => '104.9', 'description' => 'diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna ac consequat metus sapien ut nunc vestibulum ante ipsum primis in faucibus orci luctus', 'image' => 'nan', 'stock' => '146', 'Item_type_id' => '22', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Chiles rellenos', 'price' => '190.73', 'description' => 'faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam porttitor lacus', 'image' => 'nan', 'stock' => '86', 'Item_type_id' => '17', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Quesadillas', 'price' => '428.14', 'description' => 'sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam', 'image' => 'nan', 'stock' => '17', 'Item_type_id' => '13', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Papel bond', 'price' => '384.74', 'description' => 'ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus', 'image' => 'nan', 'stock' => '91', 'Item_type_id' => '23', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Carpetas', 'price' => '266.55', 'description' => 'ac diam cras pellentesque volutpat dui maecenas tristique est et tempus', 'image' => 'nan', 'stock' => '10', 'Item_type_id' => '2', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Cuadernos', 'price' => '155.08', 'description' => 'magna at nunc commodo placerat praesent blandit nam nulla integer pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem', 'image' => 'nan', 'stock' => '106', 'Item_type_id' => '16', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Lapiceros', 'price' => '212.74', 'description' => 'justo eu massa donec dapibus duis at velit eu est', 'image' => 'nan', 'stock' => '107', 'Item_type_id' => '21', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Bol�grafos', 'price' => '334.11', 'description' => 'aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet et', 'image' => 'nan', 'stock' => '38', 'Item_type_id' => '22', 'Business_id' => '1']);
        DB::table('items')->insert(['name' => 'Marcadores', 'price' => '70.86', 'description' => 'id consequat in consequat ut nulla sed accumsan felis ut at dolor quis odio consequat varius integer ac leo pellentesque ultrices mattis', 'image' => 'nan', 'stock' => '136', 'Item_type_id' => '5', 'Business_id' => '1']);
    }
}
