// import React from 'react';
// import { Text, StyleSheet, Dimensions, ImageBackground, View, Image } from 'react-native';
// import { Avatar, Title, Caption, TouchableRipple } from 'react-native-paper';

// export default function Card2({ fullname, age, gender, bday, address, contact, marital, voter, image }) {
//     return (
//         <>
//             <View style={styles.infoSection}>
//                 <Avatar.Image
//                     style={{
//                         alignSelf: 'center',
//                         marginTop: -70,
//                         marginBottom: 15
//                     }}
//                     source={{ uri: 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png', }}
//                     size={130}
//                 />
//                 <View style={{ flexDirection: 'row' }}>
//                     <View style={{ paddingHorizontal: 20 }}>
//                         <Image style={{ marginBottom: 17 }} source={require('../img/Account/name.png')} />
//                         <Image style={{ marginBottom: 18 }} source={require('../img/Account/age.png')} />
//                         <Image style={{ marginBottom: 18 }} source={require('../img/Account/gender.png')} />
//                         <Image style={{ marginBottom: 18 }} source={require('../img/Account/bday.png')} />
//                         <Image style={{ marginBottom: 15 }} source={require('../img/Account/contact.png')} />
//                         <Image style={{ marginBottom: 15 }} source={require('../img/Account/address.png')} />
//                         <Image style={{ marginBottom: 15 }} source={require('../img/Account/marriage.png')} />
//                         <Image style={{ marginBottom: 15 }} source={require('../img/Account/voter.png')} />
//                     </View>
//                     <View style={{justifyContent: 'center'}}>
//                         <Text style={styles.infoText}>{fullname}</Text>
//                         <Text style={styles.infoText}>{age}</Text>
//                         <Text style={styles.infoText}>{gender}</Text>
//                         <Text style={styles.infoText}>{bday}</Text>
//                         <Text style={styles.infoText}>{contact}</Text>
//                         <Text style={styles.infoText}>{address}</Text>
//                         <Text style={styles.infoText}>{marital}</Text>
//                         <Text style={styles.infoText}>{voter}</Text>
//                     </View>
//                 </View>

//             </View>
//         </>
//     );
// }

// const { width, height } = Dimensions.get("screen");

// const styles = StyleSheet.create({

//     infoSection: {
//         marginTop: 110,
//         width: width / 1.04,
//         height: height / 1.7,
//         borderWidth: 2,
//         borderRadius: 10,
//         backgroundColor: '#fff',
//     },

//     infoText: {
//         fontSize: 18,
//         marginBottom: 25
//     },
// });
