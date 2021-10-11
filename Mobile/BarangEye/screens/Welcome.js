import React, { Component } from 'react';
import { StyleSheet, Text, View, Image, TouchableOpacity, Linking} from 'react-native';


export default class Welcome extends React.Component {
    sign=()=>{
        alert('Contact Your Barangay or Use the Web Version to Create an Account')
    }
    render() {
        return (
            <View style={styles.container}>
                <Image
                    style={styles.logo} source={require('../assets/img/Login/mask.png')} resizeMode="contain"
                />
                {/* <Text style={{fontSize: 14, color: '#FFF', fontStyle: 'italic', marginBottom: 40}}>Protect Yourself Against Covid-19</Text> */}
                <Text style={styles.hello}>Hello!</Text>
                <Text style={styles.wel_msg}>Welcome to BarangEYE. A Platform to Get the Latest News in your Barangay!</Text>

                <View style={styles.logsign}>
                    <TouchableOpacity onPress={() => this.props.navigation.navigate('LoginScreen')} style={styles.logBtn}>
                        <Text style={styles.logTxt}>Login</Text>
                    </TouchableOpacity>

                    <TouchableOpacity style={styles.signBtn} onPress={this.sign}>
                        <Text style={styles.signTxt}>Sign Up</Text>
                    </TouchableOpacity>
                </View>

                <Text style={{ color: '#FFF', fontSize: 16, marginTop: 10 }}>--------------- Or ---------------</Text>
                
                <View style={styles.socBtn}>
                    <TouchableOpacity style={styles.fBtn} onPress={ ()=>{ Linking.openURL('https://www.facebook.com')}}>
                        <Text style={styles.socTxt}>f</Text>
                    </TouchableOpacity>

                    <TouchableOpacity style={styles.gBtn} onPress={ ()=>{ Linking.openURL('https://mail.google.com')}}>
                        <Text style={styles.socTxt}>G+</Text>
                    </TouchableOpacity>
                    
                    <TouchableOpacity style={styles.noBtn}>
                        <Text style={styles.socTxt}>#</Text>
                    </TouchableOpacity>
                </View>
            </View>
        )
    }
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#485461',
        alignItems: 'center',
        justifyContent: 'center'
    },

    logo: {
        width: '100%', 
        height: 325, 
        marginTop: -40, 
        marginBottom: 40
    },

    hello: { 
        fontSize: 40, 
        fontWeight: 'bold', 
        color: 'white' 
    },

    wel_msg: {
        fontSize: 16, 
        color: 'white', 
        textAlign: 'center', 
        marginHorizontal: 20 
    },

    logsign: { 
        flexDirection: 'row',
        margin: 20, 
        paddingVertical: 20 
    },

    logBtn: { 
        backgroundColor: '#202b37', 
        padding: 10, 
        width: 150, 
        borderRadius: 30, 
        marginHorizontal: 2, 
        marginRight: 10, 
        borderWidth: 3, 
        borderColor: '#202b37' 
    },

    logTxt: { 
        textAlign: 'center', 
        color: '#FFF', 
        fontSize: 18 
    },

    signBtn: { 
        backgroundColor: '#FFF', 
        padding: 10,
        width: 150, 
        borderRadius: 30, 
        marginHorizontal: 2, 
        marginLeft: 10, 
        borderWidth: 3, 
        borderColor: '#202b37' 
    },

    signTxt: { 
        textAlign: 'center', 
        color: '#202b37', 
        fontSize: 18 
    },

    socBtn: { 
        flexDirection: 'row', 
        marginTop: 20 
    },

    socTxt: { 
        fontSize: 25, 
        fontWeight: 'bold', 
        color: '#FFF' 
    },

    fBtn: { 
        height: 40, 
        width: 40, 
        borderRadius: 40, 
        backgroundColor: '#757de8', 
        alignItems: 'center', 
        justifyContent: 'center' 
    },

    gBtn: { 
        height: 40, 
        width: 40, 
        borderRadius: 40, 
        backgroundColor: '#ff7961', 
        marginHorizontal: 12, 
        alignItems: 'center', 
        justifyContent: 'center' 
    },

    noBtn: { 
        height: 40, 
        width: 40, 
        borderRadius: 40, 
        backgroundColor: '#80e27e', 
        alignItems: 'center', 
        justifyContent: 'center' 
    }
});
