export default function(instance) {
    return{
        Base(payload){
            return instance.pot('select/create.php')
        }
    }
}