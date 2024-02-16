<?php
    class Shopping {
        public array $itemsList;

        public function __construct()
        {
            $this->itemsList = [];
        }

        /**
         * Adds an item to the items list if it does not already exist.
         *
         * @param string $itemName The name of the item to add.
         * @return void
         */
        public function addItem(string $itemName): void {
            if (!in_array($itemName, $this->getItems()) && $itemName !== '') {
                array_push($this->itemsList, $itemName);
            }
        }

        /**
         * Removes an item of the items list if it exists.
         *
         * @param int $itemIndex The index of the item to add.
         * @return void
         */
        public function removeItem(int $itemIndex): void {
            if (in_array($itemIndex, array_keys($this->itemsList))) {
                unset($this->itemsList[$itemIndex]);
            }
        }

        /**
         * Returns the items list.
         *
         * @return array
         */
        public function getItems(): array {
            return $this->itemsList;
        }

        /**
         * Clears the items list.
         *
         * @return array
         */
        public function clearItemsList(): void {
            $this->itemsList = [];
        }
    }
?>