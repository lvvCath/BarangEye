import React, { Component } from 'react';
import { View, TouchableOpacity, StyleSheet, Dimensions, Image, Text } from 'react-native';
import { TextInput } from 'react-native-gesture-handler';
import { Avatar, Title, Caption, TouchableRipple } from 'react-native-paper';


//import { FlatList } from 'react-native-gesture-handler';
//import Card2 from '../assets/components/Card2';
const { width, height } = Dimensions.get('screen');


export default class Account extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            email: '',
            first_name: '',
            middle_name: '',
            last_name: '',
            gender: '',
            age: '',
            bdate: '',
            address: '',
            contact_no: '',
            marital_status: '',
            voter_status: '',
        }
    }

    SearchRecord = () => {
        var email = this.state.email;

        if (email.length == 0) {
            alert('Missing');
        } else {
            var APIURL = 'http://10.0.2.2:80/MobileDB/BarangEYE/display.php';
            var header = {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            };

            var Data = {
                email: email
            };

            fetch(APIURL, {
                method: 'POST',
                headers: header,
                body: JSON.stringify(Data)
            }).then((response) => response.json())
                .then((response) => {
                    this.setState({ first_name: response[0].first_name });
                    this.setState({ middle_name: response[0].middle_name });
                    this.setState({ last_name: response[0].last_name });
                    this.setState({ gender: response[0].gender });
                    this.setState({ age: response[0].age });
                    this.setState({ bdate: response[0].bdate });
                    this.setState({ address: response[0].address });
                    this.setState({ contact_no: response[0].contact_no });
                    this.setState({ marital_status: response[0].marital_status });
                    this.setState({ voter_status: response[0].voter_status });
                }).catch((error) => {
                    alert('Error' + error);
                })
        }
    }

    render() {
        //const {User} = this.props.route.params;
        return (
            <View style={styles.container}>
                <View style={{ marginLeft: 345, marginTop: 10 }}>
                    <TouchableOpacity onPress={() => this.props.navigation.navigate("Welcome")}>
                        <Image source={require('../assets/img/Account/logout.png')} />
                    </TouchableOpacity>
                </View>
                <View style={{marginTop: -10 }}>
                        <TextInput
                            style={{ color: '#fff', borderBottomWidth: 2, borderBottomColor: '#fff' }}
                            placeholderTextColor="#FFF"
                            placeholder='Please Enter Email to View'
                            //value={User}
                            //onChangeText={UserEmail => this.setState({User})} />
                            onChangeText={email => this.setState({ email })} />
                </View>
                <View style={styles.infoSection}>
                    <TouchableOpacity onPress={this.SearchRecord}>
                        <Avatar.Image
                            style={{
                                alignSelf: 'center',
                                marginTop: -70,
                                marginBottom: 15
                            }}
                            source={{ uri: 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png', }}
                            size={130}
                        />
                    </TouchableOpacity>

                    <View style={{ flexDirection: 'row' }}>
                        <View style={{ paddingHorizontal: 20 }}>
                            <Image style={{ marginBottom: 17 }} source={require('../assets/img/Account/name.png')} />
                            <Image style={{ marginBottom: 18 }} source={require('../assets/img/Account/gender.png')} />
                            <Image style={{ marginBottom: 18 }} source={require('../assets/img/Account/age.png')} />
                            <Image style={{ marginBottom: 18 }} source={require('../assets/img/Account/bday.png')} />
                            <Image style={{ marginBottom: 15 }} source={require('../assets/img/Account/address.png')} />
                            <Image style={{ marginBottom: 15 }} source={require('../assets/img/Account/contact.png')} />
                            <Image style={{ marginBottom: 15 }} source={require('../assets/img/Account/marriage.png')} />
                            <Image style={{ marginBottom: 15 }} source={require('../assets/img/Account/voter.png')} />
                        </View>
                        <View style={{ justifyContent: 'center' }}>
                            <View style={{ flexDirection: 'row' }}>
                                <Text style={styles.infoText}>{this.state.last_name}</Text>
                                <Text>   </Text>
                                <Text style={styles.infoText}>{this.state.first_name}</Text>
                                <Text>   </Text>
                                <Text style={styles.infoText}>{this.state.middle_name}</Text>
                            </View>
                            <Text style={styles.infoText}>{this.state.gender}</Text>
                            <Text style={styles.infoText}>{this.state.age}</Text>
                            <Text style={styles.infoText}>{this.state.bdate}</Text>
                            <Text style={styles.infoText}>{this.state.address}</Text>
                            <Text style={styles.infoText}>{this.state.contact_no}</Text>
                            <Text style={styles.infoText}>{this.state.marital_status}</Text>
                            <Text style={styles.infoText}>{this.state.voter_status}</Text>
                        </View>
                    </View>
                </View>
            </View>
        )
    }
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        alignItems: 'center',
        backgroundColor: '#74808e'
    },

    infoSection: {
        marginTop: 110,
        width: width / 1.04,
        height: height / 1.7,
        borderWidth: 2,
        borderRadius: 10,
        backgroundColor: '#fff',
    },

    userInfoSection: {
        alignItems: 'center',
        marginTop: -80
    },

    info: {
        //paddingBottom: 20,
        position: 'absolute'
    },

    infoText: {
        fontSize: 20,
        marginRight: 5
    },

    caption: {
        fontSize: 14,
        lineHeight: 14,
        fontWeight: '500'
    },

    row: {
        flexDirection: 'row',
        marginBottom: 10,
    },

    infoBoxWrapper: {
        borderBottomColor: '#dddddd',
        borderBottomWidth: 1,
        borderTopColor: '#dddddd',
        borderTopWidth: 1,
        flexDirection: 'row',
        height: 100,
    },

    infoBox: {
        width: '50%',
        alignItems: 'center',
        justifyContent: 'center',
    },

    menuWrapper: {
        marginTop: 10
    },

    menuItem: {
        flexDirection: 'row',
        paddingVertical: 15,
        paddingHorizontal: 30,
    },

    menuItemText: {
        color: '#777777',
        marginLeft: 20,
        fontWeight: '600',
        fontSize: 16,
        lineHeight: 26,
    },

    btnContainer: {
        alignItems: 'center',
        justifyContent: 'center',
        marginTop: 0
    },

    logBtn: {
        width: 250,
        backgroundColor: '#202b37',
        padding: 10,
        alignItems: 'center',
        justifyContent: 'center',
        borderRadius: 40,
        marginTop: 30
    },

    logTxt: {
        textAlign: 'center',
        color: '#FFF',
        fontSize: 17
    },
    infoSection: {
        marginTop: 95,
        width: width / 1.04,
        height: height / 1.7,
        borderWidth: 2,
        borderRadius: 10,
        backgroundColor: '#fff',
    },

    infoText: {
        fontSize: 18,
        marginBottom: 25
    },
})