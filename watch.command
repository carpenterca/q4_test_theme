#to make correct file permissions type/copy this in the command line chmod 700 watch.command
        BASEDIR=$(dirname "$0")
        cd $BASEDIR
        cd wp-content
        cd themes
        cd Q4_Theme_2.0
while true
do

echo "1. update watch
2. rebuild watch
3. run watch (recomended)"

read Selection
    
if [ '1' = "$Selection" ]; then
    clear
    npm update watch
    echo "\n Update done"
elif [ '2' = "$Selection" ]; then
    clear
       npm rebuild watch
    echo "\n Rebuild done"
elif [ '3' = "$Selection" ]; then
    clear
    npm run watch
    echo "\n Running watch"
fi

done