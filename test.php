<?php
    use PHPUnit\Framework\TestCase;
    require "test/index.php";

    class test extends TestCase{
        private $index;

        protected function setUp () : void {
            $this->index = new index();
        }

        /** @test */
        function sumTest (): void{
            $result = $this->index->sum(1,2);
            $this->assertSame(3, $result);
        }
        /** @test */
        function minusTest(): void {
            $this->assertSame(4, $this->index->minus(6, 2));
        }
    }
?>