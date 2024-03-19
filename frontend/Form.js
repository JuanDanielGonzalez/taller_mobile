import { View, Text } from 'react-native'
const Form = () => {
  return (
    <View>
      <Text>User</Text>
      <TextInput placeholder='Nombre'/>
      <TextInput placeholder='Apellido'/>
      <TextInput placeholder='Edad'/>
      <TextInput placeholder='Cantidad Acompañantes'/>

    </View>
  )
}
export default Form