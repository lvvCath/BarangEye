import React, { Component } from 'react';
import { StyleSheet, Text, TextInput, View, Image, Dimensions, Easing, Animated, TouchableOpacity } from 'react-native';
import Input from '../assets/components/Input';
import ImageButton  from '../assets/components/ImageButton';
import { Avatar, Title, Caption, TouchableRipple } from 'react-native-paper';


const {width, height} = Dimensions.get("screen");

export default class Dashboard extends React.Component {
    constructor(props){
        super(props);
        this.states={
            email: '',
        }
    }
    state = {
        alignment: new Animated.Value(height),
    };

    componentDidMount(){
        this.AnimatedHeader();

    //     var Data ={
    //         email: email
    //     };

    //     fetch('http://10.0.2.2:80/BarangEYE/display.php',{
    //         method: 'POST',
    //         headers: {
    //             'Accept': 'application/json',
    //             'Content-Type': 'application/json',
    //         },
    //         body: JSON.stringify(Data)
    //     }).then((response)=> response.json())
    //         .then((responseJson)=>{
    //             this.setState({
    //                 first_name: responseJson[0].first_name,
    //                 middle_name: responseJson[0].middle_name,
    //                 last_name: responseJson[0].last_name,
    //                 gender: responseJson[0].gender,
    //                 age: responseJson[0].age,
    //                 bdate: responseJson[0].bdate,
    //                 address: responseJson[0].address,
    //                 contact_no: responseJson[0].contact_no,
    //                 marital_status: responseJson[0].marital_status,
    //                 voter_status: responseJson[0].voter_status,
    //             })
    //         })
    };

    AnimatedHeader = () => {
        Animated.timing(this.state.alignment, {
            toValue: 200,
            duration: 1500,
            easing: Easing.linear,
            useNativeDriver: false,
        }).start();
    };

    render() {
        const AnimatedHeader ={
            height: this.state.alignment
        };
        const {Email} = this.props.route.params

        return (
            <View>
                <Animated.View style={[styles.header, AnimatedHeader]}>
                    <View style={{ flex: 0.8, paddingTop: 10 }}>
                        <Text style={styles.headerText}>WELCOME</Text>
                        <TextInput style={styles.headerEmail}
                                   value={Email}
                                   onChangeText={email => this.setState({Email})}/>
                    </View>
                    <View style={{ flex: 0.08, paddingTop: 15, alignItems: 'flex-end' }}>
                        <TouchableOpacity onPress={() => this.props.navigation.navigate('Account',{User: Email})}>
                            <Image source={{ uri: 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png', }} style={styles.headerImage} />
                        </TouchableOpacity>
                    </View>
                </Animated.View>
                <View>
                    <View style={{ alignItems: 'center', marginTop: -40 }}>
                        <Input />
                    </View>
                    <View style={{ marginTop: 20, justifyContent: 'center', flexDirection: 'row' }}>
                        <View style={styles.imageViewHeader}>
                                <Image source={require('../assets/img/Dashboard/news.png')} style={styles.imageHeader} />
                                <ImageButton onPress={() => this.props.navigation.navigate('News')}/>
                        </View>
                    </View>

                    <View style={styles.imageContainer}>
                        <View style={styles.imageView}>
                                <Image source={require('../assets/img/Dashboard/covid.png')} style={styles.image} />
                                <ImageButton onPress={() => this.props.navigation.navigate('Covid')}/>
                        </View>
                        <View style={styles.imageView}>
                            
                                <Image source={require('../assets/img/Dashboard/officials.png')} style={styles.image} />
                                <ImageButton onPress={() => this.props.navigation.navigate('Official')}/>
                        </View>
                    </View>

                    <View style={styles.imageContainer}>
                        <View style={styles.imageView}>
                        
                                <Image source={require('../assets/img/Dashboard/report.png')} style={styles.image} />
                                <ImageButton onPress={() => this.props.navigation.navigate('Modal2')}/>
                        </View>
                        <View style={styles.imageView}>
                          
                                <Image source={require('../assets/img/Dashboard/request.png')} style={styles.image} />
                                <ImageButton onPress={() => this.props.navigation.navigate('Modal')}/>
                        </View>
                    </View>
                </View>
            </View>
        )
    }
}


const styles = StyleSheet.create({
    header: {
        marginTop: -40,
        flexDirection: 'row',
        justifyContent: 'center',
        alignItems: 'center'
    },

    headerText: {
        fontSize: 45,
        fontWeight: 'bold',
        paddingLeft: 10,
    },

    headerEmail: {
        fontSize: 20,
        fontWeight: '400',
        paddingLeft: 15,
    },

    headerImage: {
        width: 60,
        height: 60,
        borderRadius: 50,
    },

    imageContainer: {
        flexDirection: 'row',
        marginTop: 14,
        justifyContent: 'center'
    },

    imageViewHeader: {
        width: 354,
        height: height / 6,
        marginHorizontal: 10,
    },

    imageView: {
        width: width / 2.3,
        height: height / 5,
        marginHorizontal: 8
    },

    imageHeader: {
        width: '100%',
        height: '100%',
        borderRadius: 20
    },

    image: {
        width: '100%',
        height: '100%',
        borderRadius: 20
    }
});