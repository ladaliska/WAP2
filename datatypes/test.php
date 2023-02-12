<?php 
 error_reporting(E_ALL);
function test0(bool $x):bool
{return $x;}
function test1(bool $x):int
{return $x;}
function test2(bool $x):float
{return $x;}
function test3(bool $x):string
{return $x;}
function test4(bool $x):null
{return $x;}
function test5(int $x):bool
{return $x;}
function test6(int $x):int
{return $x;}
function test7(int $x):float
{return $x;}
function test8(int $x):string
{return $x;}
function test9(int $x):null
{return $x;}
function test10(float $x):bool
{return $x;}
function test11(float $x):int
{return $x;}
function test12(float $x):float
{return $x;}
function test13(float $x):string
{return $x;}
function test14(float $x):null
{return $x;}
function test15(string $x):bool
{return $x;}
function test16(string $x):int
{return $x;}
function test17(string $x):float
{return $x;}
function test18(string $x):string
{return $x;}
function test19(string $x):null
{return $x;}
function test20(null $x):bool
{return $x;}
function test21(null $x):int
{return $x;}
function test22(null $x):float
{return $x;}
function test23(null $x):string
{return $x;}
function test24(null $x):null
{return $x;}
try {
test0(TRUE);}
catch (Throwable){
echo 'Error: bool to bool';}
try {
test0(3);}
catch (Throwable){
echo 'Error: bool to bool';}
try {
test0(1.2);}
catch (Throwable){
echo 'Error: bool to bool';}
try {
test0("string");}
catch (Throwable){
echo 'Error: bool to bool';}
try {
test0(null);}
catch (Throwable){
echo 'Error: bool to bool';}
try {
test1(TRUE);}
catch (Throwable){
echo 'Error: bool to int';}
try {
test1(3);}
catch (Throwable){
echo 'Error: bool to int';}
try {
test1(1.2);}
catch (Throwable){
echo 'Error: bool to int';}
try {
test1("string");}
catch (Throwable){
echo 'Error: bool to int';}
try {
test1(null);}
catch (Throwable){
echo 'Error: bool to int';}
try {
test2(TRUE);}
catch (Throwable){
echo 'Error: bool to float';}
try {
test2(3);}
catch (Throwable){
echo 'Error: bool to float';}
try {
test2(1.2);}
catch (Throwable){
echo 'Error: bool to float';}
try {
test2("string");}
catch (Throwable){
echo 'Error: bool to float';}
try {
test2(null);}
catch (Throwable){
echo 'Error: bool to float';}
try {
test3(TRUE);}
catch (Throwable){
echo 'Error: bool to string';}
try {
test3(3);}
catch (Throwable){
echo 'Error: bool to string';}
try {
test3(1.2);}
catch (Throwable){
echo 'Error: bool to string';}
try {
test3("string");}
catch (Throwable){
echo 'Error: bool to string';}
try {
test3(null);}
catch (Throwable){
echo 'Error: bool to string';}
try {
test4(TRUE);}
catch (Throwable){
echo 'Error: bool to null';}
try {
test4(3);}
catch (Throwable){
echo 'Error: bool to null';}
try {
test4(1.2);}
catch (Throwable){
echo 'Error: bool to null';}
try {
test4("string");}
catch (Throwable){
echo 'Error: bool to null';}
try {
test4(null);}
catch (Throwable){
echo 'Error: bool to null';}
try {
test5(TRUE);}
catch (Throwable){
echo 'Error: int to bool';}
try {
test5(3);}
catch (Throwable){
echo 'Error: int to bool';}
try {
test5(1.2);}
catch (Throwable){
echo 'Error: int to bool';}
try {
test5("string");}
catch (Throwable){
echo 'Error: int to bool';}
try {
test5(null);}
catch (Throwable){
echo 'Error: int to bool';}
try {
test6(TRUE);}
catch (Throwable){
echo 'Error: int to int';}
try {
test6(3);}
catch (Throwable){
echo 'Error: int to int';}
try {
test6(1.2);}
catch (Throwable){
echo 'Error: int to int';}
try {
test6("string");}
catch (Throwable){
echo 'Error: int to int';}
try {
test6(null);}
catch (Throwable){
echo 'Error: int to int';}
try {
test7(TRUE);}
catch (Throwable){
echo 'Error: int to float';}
try {
test7(3);}
catch (Throwable){
echo 'Error: int to float';}
try {
test7(1.2);}
catch (Throwable){
echo 'Error: int to float';}
try {
test7("string");}
catch (Throwable){
echo 'Error: int to float';}
try {
test7(null);}
catch (Throwable){
echo 'Error: int to float';}
try {
test8(TRUE);}
catch (Throwable){
echo 'Error: int to string';}
try {
test8(3);}
catch (Throwable){
echo 'Error: int to string';}
try {
test8(1.2);}
catch (Throwable){
echo 'Error: int to string';}
try {
test8("string");}
catch (Throwable){
echo 'Error: int to string';}
try {
test8(null);}
catch (Throwable){
echo 'Error: int to string';}
try {
test9(TRUE);}
catch (Throwable){
echo 'Error: int to null';}
try {
test9(3);}
catch (Throwable){
echo 'Error: int to null';}
try {
test9(1.2);}
catch (Throwable){
echo 'Error: int to null';}
try {
test9("string");}
catch (Throwable){
echo 'Error: int to null';}
try {
test9(null);}
catch (Throwable){
echo 'Error: int to null';}
try {
test10(TRUE);}
catch (Throwable){
echo 'Error: float to bool';}
try {
test10(3);}
catch (Throwable){
echo 'Error: float to bool';}
try {
test10(1.2);}
catch (Throwable){
echo 'Error: float to bool';}
try {
test10("string");}
catch (Throwable){
echo 'Error: float to bool';}
try {
test10(null);}
catch (Throwable){
echo 'Error: float to bool';}
try {
test11(TRUE);}
catch (Throwable){
echo 'Error: float to int';}
try {
test11(3);}
catch (Throwable){
echo 'Error: float to int';}
try {
test11(1.2);}
catch (Throwable){
echo 'Error: float to int';}
try {
test11("string");}
catch (Throwable){
echo 'Error: float to int';}
try {
test11(null);}
catch (Throwable){
echo 'Error: float to int';}
try {
test12(TRUE);}
catch (Throwable){
echo 'Error: float to float';}
try {
test12(3);}
catch (Throwable){
echo 'Error: float to float';}
try {
test12(1.2);}
catch (Throwable){
echo 'Error: float to float';}
try {
test12("string");}
catch (Throwable){
echo 'Error: float to float';}
try {
test12(null);}
catch (Throwable){
echo 'Error: float to float';}
try {
test13(TRUE);}
catch (Throwable){
echo 'Error: float to string';}
try {
test13(3);}
catch (Throwable){
echo 'Error: float to string';}
try {
test13(1.2);}
catch (Throwable){
echo 'Error: float to string';}
try {
test13("string");}
catch (Throwable){
echo 'Error: float to string';}
try {
test13(null);}
catch (Throwable){
echo 'Error: float to string';}
try {
test14(TRUE);}
catch (Throwable){
echo 'Error: float to null';}
try {
test14(3);}
catch (Throwable){
echo 'Error: float to null';}
try {
test14(1.2);}
catch (Throwable){
echo 'Error: float to null';}
try {
test14("string");}
catch (Throwable){
echo 'Error: float to null';}
try {
test14(null);}
catch (Throwable){
echo 'Error: float to null';}
try {
test15(TRUE);}
catch (Throwable){
echo 'Error: string to bool';}
try {
test15(3);}
catch (Throwable){
echo 'Error: string to bool';}
try {
test15(1.2);}
catch (Throwable){
echo 'Error: string to bool';}
try {
test15("string");}
catch (Throwable){
echo 'Error: string to bool';}
try {
test15(null);}
catch (Throwable){
echo 'Error: string to bool';}
try {
test16(TRUE);}
catch (Throwable){
echo 'Error: string to int';}
try {
test16(3);}
catch (Throwable){
echo 'Error: string to int';}
try {
test16(1.2);}
catch (Throwable){
echo 'Error: string to int';}
try {
test16("string");}
catch (Throwable){
echo 'Error: string to int';}
try {
test16(null);}
catch (Throwable){
echo 'Error: string to int';}
try {
test17(TRUE);}
catch (Throwable){
echo 'Error: string to float';}
try {
test17(3);}
catch (Throwable){
echo 'Error: string to float';}
try {
test17(1.2);}
catch (Throwable){
echo 'Error: string to float';}
try {
test17("string");}
catch (Throwable){
echo 'Error: string to float';}
try {
test17(null);}
catch (Throwable){
echo 'Error: string to float';}
try {
test18(TRUE);}
catch (Throwable){
echo 'Error: string to string';}
try {
test18(3);}
catch (Throwable){
echo 'Error: string to string';}
try {
test18(1.2);}
catch (Throwable){
echo 'Error: string to string';}
try {
test18("string");}
catch (Throwable){
echo 'Error: string to string';}
try {
test18(null);}
catch (Throwable){
echo 'Error: string to string';}
try {
test19(TRUE);}
catch (Throwable){
echo 'Error: string to null';}
try {
test19(3);}
catch (Throwable){
echo 'Error: string to null';}
try {
test19(1.2);}
catch (Throwable){
echo 'Error: string to null';}
try {
test19("string");}
catch (Throwable){
echo 'Error: string to null';}
try {
test19(null);}
catch (Throwable){
echo 'Error: string to null';}
try {
test20(TRUE);}
catch (Throwable){
echo 'Error: null to bool';}
try {
test20(3);}
catch (Throwable){
echo 'Error: null to bool';}
try {
test20(1.2);}
catch (Throwable){
echo 'Error: null to bool';}
try {
test20("string");}
catch (Throwable){
echo 'Error: null to bool';}
try {
test20(null);}
catch (Throwable){
echo 'Error: null to bool';}
try {
test21(TRUE);}
catch (Throwable){
echo 'Error: null to int';}
try {
test21(3);}
catch (Throwable){
echo 'Error: null to int';}
try {
test21(1.2);}
catch (Throwable){
echo 'Error: null to int';}
try {
test21("string");}
catch (Throwable){
echo 'Error: null to int';}
try {
test21(null);}
catch (Throwable){
echo 'Error: null to int';}
try {
test22(TRUE);}
catch (Throwable){
echo 'Error: null to float';}
try {
test22(3);}
catch (Throwable){
echo 'Error: null to float';}
try {
test22(1.2);}
catch (Throwable){
echo 'Error: null to float';}
try {
test22("string");}
catch (Throwable){
echo 'Error: null to float';}
try {
test22(null);}
catch (Throwable){
echo 'Error: null to float';}
try {
test23(TRUE);}
catch (Throwable){
echo 'Error: null to string';}
try {
test23(3);}
catch (Throwable){
echo 'Error: null to string';}
try {
test23(1.2);}
catch (Throwable){
echo 'Error: null to string';}
try {
test23("string");}
catch (Throwable){
echo 'Error: null to string';}
try {
test23(null);}
catch (Throwable){
echo 'Error: null to string';}
try {
test24(TRUE);}
catch (Throwable){
echo 'Error: null to null';}
try {
test24(3);}
catch (Throwable){
echo 'Error: null to null';}
try {
test24(1.2);}
catch (Throwable){
echo 'Error: null to null';}
try {
test24("string");}
catch (Throwable){
echo 'Error: null to null';}
try {
test24(null);}
catch (Throwable){
echo 'Error: null to null';}
