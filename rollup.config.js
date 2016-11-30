import buble from 'rollup-plugin-buble';

export default {
  entry: 'src/addons_schedule2.js',
  // dest: 'build/addons_schedule2.min.js', // Uncomment to actually create an output file
  plugins: [buble()]
};