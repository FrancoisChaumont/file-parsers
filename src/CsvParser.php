<?php 

namespace FC\FileParsers;

    /**
     * Simple PHP library to handle reading lines from a CSV file
     */
    class CsvParser {
    /* constants */
        const R = 'r';      // Read only. Starts at the beginning of the file
        const RP = 'r+';    // Read/Write. Starts at the beginning of the file
        const W = 'w';      // Write only. Opens and clears the contents of file; or creates a new file if it doesn't exist
        const WP = 'w+';    // Read/Write. Opens and clears the contents of file; or creates a new file if it doesn't exist
        const A = 'a';      // Write only. Opens and writes to the end of the file or creates a new file if it doesn't exist
        const AP = 'a+';    // Read/Write. Preserves file content by writing to the end of the file
        const X = 'x';      // Write only. Creates a new file. Returns FALSE and an error if file already exists
        const XP = 'x+';    // Read/Write. Creates a new file. Returns FALSE and an error if file already exists

        const EOF = '';     // end of file for line reading (CSV files are not supposed to have empty lines)

    /* member variables */
        private $file;
        private $pathToFile;
        private $open;

    /* member functions */
        /**
         * Return true if the file has been opened successfully, false otherwise
         *
         * @return boolean
         */
        public function isOpen(): bool { return $this->open; }

    /* construtors */
        /**
         * Instantiate a new object and try to open the file using a given mode
         *
         * @param string $parPathToFile
         * @param string $parOpenMode
         */
        function __construct(string $parPathToFile, string $parOpenMode=self::R) {
            $this->pathToFile = $parPathToFile;
            $this->open = false;

            if (file_exists($this->pathToFile)) { 
                $this->openFile($parOpenMode);
                $this->open = true;
            }
        }

        /**
         * Close the open file and destroy the object
         */
        function __destruct() {
            if ($this->open) { $this->closeFile(); }
        }

    /* methods */
        /**
         * Open the file using a given mode
         *
         * @param string $parOpenMode
         * @return void
         */
        public function openFile(string $parOpenMode) {
            $this->open = false;
            $this->file = @fopen($this->pathToFile, $parOpenMode);
            if ($this->file != false) { $this->open = true; } 
        }

        /**
         * Close the open file and mark it as closed
         *
         * @return void
         */
        public function closeFile() {
            fclose($this->file);
            $this->open = false;
        }

        /**
         * Read one line off the open file and return a one-dimension array with the result or end of file constant
         *
         * @return void
         */
        public function readLine() {
            if (!feof($this->file)) { return fgetcsv($this->file); }
            else { return self::EOF; }
        }
    }    
