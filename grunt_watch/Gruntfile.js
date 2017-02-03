/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
module.exports = function (grunt) {
    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        
         concat:{
            bar:{
                src: ['bar/1.js','bar/2.js'],
                dest: 'build/js/dest.js'
            },
            foo:{
               src: ['foo/1.css','foo/2.css'],
               dest: 'build/css/dest.css'
            }
        },
        
        watch: {
            bar:{
             files: ['bar/**/*.js'],
             tasks: ['concat']
            },
            foo:{
                files: ['foo/**/*.css'],
                tasks: ['concat']
            }
        }
        
    });
    
     grunt.loadNpmTasks('grunt-contrib-concat');
    
     grunt.loadNpmTasks('grunt-contrib-watch');
    
};
