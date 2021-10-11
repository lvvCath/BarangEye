import React, { Component } from 'react';
import { View, StyleSheet, Modal, Text, ImageBackground, Dimensions, Animated, Easing, TouchableOpacity, TextInput } from 'react-native';
import LinearGradient from 'react-native-linear-gradient';
import { ScrollView } from 'react-native-gesture-handler';

const { width, height } = Dimensions.get('screen');

export default class Covid extends React.Component {

    constructor(props) {

        super(props);

        this.states = {
            email: '',
            case_no: '',
            status: '',
        }
    }
    
    Track=()=>{
        var email = this.states.email;

        if (email.length == 0) {
            alert('Missing');
        } else {
            var APIURL = 'http://10.0.2.2:80/BarangEYE/reportView.php';
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
                    this.setState({ case_no: response[0].case_no });
                    this.setState({ status: response[0].status });

                }).catch((error) => {
                    alert('Error' + error);
                })
        }
    }

    state = {
        alignment: new Animated.Value(height),
    };

    AnimatedBackground = () => {
        Animated.timing(this.state.alignment, {
            toValue: height / 4,
            duration: 800,
            easing: Easing.back(),
            useNativeDriver: false,
        }).start();
    };

    componentDidMount() {
        this.AnimatedBackground();
    }


    render() {

        const AnimatedBackground = {
            height: this.state.alignment,
        };

        return (
            <View>
                <Animated.View style={[{ width: width }, AnimatedBackground]}>
                    <ImageBackground style={styles.backgroundImage} source={require('../assets/img/Dashboard/report1.png')} />
                </Animated.View>
                <View style={{ alignItems: 'center', marginVertical: 7 }}>
                    <View
                        style={{ backgroundColor: '#d7e1ec' }}
                    // contentContainerStyle={{ paddingBottom: 0 }}
                    // scrollEnabled={false}
                    // showsVerticalScrollIndicator={false}
                    >
                        <View style={styles.infoSection}>
                            <View style={{ flexDirection: 'row' }}>
                                <View style={{ width: 250, marginLeft: 7 }}>
                                    <TextInput
                                        style={{ color: 'black', borderBottomWidth: 2, borderBottomColor: '#000', textAlign: 'center' }}
                                        placeholderTextColor="#000"
                                        placeholder='Please Enter Email to View'
                                        //value={User}
                                        //onChangeText={UserEmail => this.setState({User})} />
                                        onChangeText={email => this.setState({ email })} />
                                </View>
                                <View style={{ marginLeft: 10 }}>
                                    <TouchableOpacity 
                                    style={styles.logBtn}
                                    onPress={this.Track}>
                                        <Text style={styles.logTxt}>Track</Text>
                                    </TouchableOpacity>
                                </View>
                            </View>
                            <View style={{flexDirection: 'row', justifyContent: 'center'}}>
                                <View style={{paddingRight: 90}}>  
                                    <Text style={styles.logTxt1}>CASE NO</Text>
                                </View>
                                <View style={{paddingleft: 90}}>
                                    <Text style={styles.logTxt1}>STATUS</Text>
                                </View>                               
                            </View>
                            <View style={{flexDirection: 'row', justifyContent: 'center'}}>
                                <View style={{paddingRight: 110}}>  
                                    <Text style={styles.logTxt2}>{this.states.case_no}</Text>
                                </View>
                                <View style={{paddingleft: 110}}>
                                    <Text style={styles.logTxt2}>{this.states.status}</Text>
                                </View>                               
                            </View>
                        </View>
                    </View>
                </View>
                <View style={{ justifyContent: 'center', flexDirection: 'row' }}>
                    <View style={styles.imageViewHeader}>
                        <LinearGradient
                            colors={['#045de9', '#09c6f9']}
                            style={styles.imageHeader}>
                            <TouchableOpacity style={{ alignItems: 'center', marginTop: 4 }}
                                onPress={() => this.props.navigation.navigate('Modal2')}>
                                <Text style={{ fontSize: 35, color: '#000', fontWeight: '800' }}>REPORT</Text>
                            </TouchableOpacity>
                        </LinearGradient>
                    </View>
                </View>
            </View>
        );
    }
}

const styles = StyleSheet.create({
    backgroundImage: {
        width: '100%',
        height: '100%'
    },

    imageContainer: {
        flexDirection: 'row',
        marginTop: 10,
        justifyContent: 'center'
    },

    imageViewHeader: {
        width: 380,
        height: height / 15,

    },

    imageView: {
        width: width / 2.3,
        height: height / 7,
    },

    imageHeader: {
        width: '100%',
        height: '100%',
        borderRadius: 20,

    },

    image: {
        width: '100%',
        height: '100%',
        borderRadius: 20
    },

    infoSection: {
        width: width / 1.04,
        height: height / 1.9,
        borderWidth: 2,
        borderRadius: 10,
        backgroundColor: '#fff',
    },

    logBtn: {
        width: 100,
        backgroundColor: '#202b37',
        padding: 10,
        alignItems: 'center',
        justifyContent: 'center',
        borderRadius: 40,
        marginTop: 5
    },

    logTxt: {
        textAlign: 'center',
        color: '#FFF',
        fontSize: 17
    },

    logTxt1: {
        textAlign: 'center',
        color: '#000',
        fontSize: 25
    },

    logTxt2: {
        textAlign: 'center',
        color: 'red',
        fontSize: 20
    },

});

