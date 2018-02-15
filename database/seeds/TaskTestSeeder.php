<?php

use Illuminate\Database\Seeder;

class TaskTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_tests')->delete();


        DB::table('task_tests')->insert([
            [
                'name' => 'Dve cisla',
                'type' => '1',
                'level_id' =>1,
                'code'=>'
import unittest
import usercode
class TestCalc(unittest.TestCase):
    def test_add(self):
        result = usercode.sum(2,2)
        self.assertEqual(result,4)',
            ],

            [
                'name' => 'Dve cisla 2',
                'type' => '1',
                'level_id' =>1,
                'code'=>'
import unittest
import usercode
class TestCalc(unittest.TestCase):
    def test_add(self):
        result = usercode.sum(2,3)
        self.assertEqual(result,5)',
            ],


        [
            'name' => 'Dve lubovolne cisla  ',
            'type' => '1',
            'level_id' =>2,
            'code'=>'
import unittest
import usercode
class TestCalc(unittest.TestCase):
    def test_add(self):
        result = usercode.sum(-2,3)
        self.assertEqual(result,1)',
        ],
                [
                    'name' => 'Dve lubovolne cisla 2 ',
                    'type' => '1',
                    'level_id' =>2,
                    'code'=>'
import unittest
import usercode
class TestCalc(unittest.TestCase):
    def test_add(self):
        result = usercode.sum(-2,-3)
        self.assertEqual(result,-5)',
                ]

        ]);
    }
}
