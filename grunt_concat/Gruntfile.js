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
            js:{
                src: ['js/js1.js','js/js2.js'],
                dest: 'build/js/dest.js'
            },
            css:{
               src: ['css/css1.css','css/css2.css'],
               dest: 'build/css/dest.css'
            }
        }
    });
    
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.registerTask('default', ['concat'] );
};
