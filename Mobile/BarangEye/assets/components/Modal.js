import React, { Component } from 'react';
import { View, StyleSheet, Text, TouchableOpacity, Image, TextInput, Dimensions, Alert } from 'react-native';
import FontAwesome from 'react-native-vector-icons/FontAwesome';
import { ScrollView } from 'react-native-gesture-handler';

const { width, height } = Dimensions.get('screen');

export default class Edit extends React.Component {
    constructor(props) {
        super(props)
        this.state = {
            Years: '',
            Form: '',
            email: '',
            Message: '',
        }
    }

    InsertRequest = () => {
        const { Years } = this.state;
        const { Form } = this.state;
        const { email } = this.state;
        const { Message } = this.state;

        if(email.length===0){
            alert('Enter Email');
        }else{
            fetch('http://10.0.2.2:80/MobileDB/BarangEYE/insertRequest.php', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                no_of_year: Years,
                category: Form,
                email: email,
                message: Message
            })
        }).then((response) => response.json())
            .then((responseJson) => {
                Alert.alert(responseJson);
                this.props.navigation.navigate("Dashboard", { Email: this.state.email });

            }).catch((error) => {
                console.error(error);
            });
        }
    }

    render() {
        return (
            <View style={styles.container}>
                <View style={{ alignItems: 'center', width: '100%' }}>
                    <Text style={{ fontSize: 21, fontWeight: 'bold', marginVertical: 12, color: '#000' }}>REQUEST FORM</Text>
                </View>
                <View style={{ margin: 20 }}>
                    <View style={styles.infoSection}>
                        <Text style={{ fontWeight: 'bold', fontSize: 18, color: '#000' }}>TERMS AND CONDITIONS</Text>
                        <View style={{ marginVertical: 10 }}>
                            <Text style={{ fontSize: 15, color: '#000' }}>By accessing this section of the app, we assume that you accept these terms and conditions. Otherwise, kindly click the back button to cancel.</Text>
                        </View>
                    </View>
                    <ScrollView style={{ marginTop: 5 }} contentContainerStyle={{ paddingBottom: 150 }} showsVerticalScrollIndicator={false}>
                        <View style={styles.action2}>
                            <View style={styles.infoSection}>
                                <Text style={{ fontWeight: 'bold', fontSize: 18, color: '#000' }}>Available For Request</Text>
                                <View style={{ marginVertical: 10, alignItems: 'center', justifyContent: 'center' }}>
                                    <Text style={{ fontSize: 14, color: '#000' }}>CEDULA</Text>
                                    <Text style={{ fontSize: 14, color: '#000' }}>BARANGAY ID</Text>
                                    <Text style={{ fontSize: 14, color: '#000' }}>BARANGA CLEARANCE / INDIGENCY</Text>
                                    <Text style={{ fontSize: 14, color: '#000' }}>BARANGAY BUSINESS PERMIT</Text>
                                </View>
                            </View>
                        </View>
                        <View style={styles.action}>
                            <TextInput
                                placeholder="NO. OF YEARS LIVING IN THE BRGY."
                                keyboardType='number-pad'
                                placeholderTextColor='#666666'
                                onChangeText={Years => this.setState({ Years })}
                                autoCorrect={false}
                                style={styles.textInput}
                            />
                        </View>

                        <View style={styles.action}>
                            <TextInput
                                placeholder="TYPE OF FORM REQUESTED"
                                placeholderTextColor='#666666'
                                onChangeText={Form => this.setState({ Form })}
                                autoCorrect={false}
                                style={styles.textInput}
                            />
                        </View>
                        {/* <View style={styles.action}>
                            <TextInput
                                placeholder="Name of Requester"
                                placeholderTextColor='#666666'
                                autoCorrect={false}
                                style={styles.textInput}
                            />
                        </View> */}
                        <View style={styles.action}>
                            <TextInput
                                placeholder="Email Address"
                                placeholderTextColor='#666666'
                                onChangeText={email => this.setState({ email })}
                                autoCorrect={false}
                                style={styles.textInput}
                            />
                        </View>
                        {/* <View style={styles.action}>
                            <TextInput
                                placeholder="Address of Requester"
                                placeholderTextColor='#666666'
                                autoCorrect={false}
                                style={styles.textInput}
                            />
                        </View> */}
                        <View style={styles.infoSection1}>
                            <View style={{ marginVertical: 10 }}>
                                <Text style={{ fontSize: 15, color: '#000' }}>
                                    VALID REASON FOR REQUESTING:
                                </Text>
                                <TextInput
                                    multiline={true}
                                    //maxLength={40}
                                    placeholder="Reason"
                                    placeholderTextColor='#666666'
                                    onChangeText={Message => this.setState({ Message })}
                                    autoCorrect={false}
                                    style={styles.textInput1}
                                />
                            </View>
                        </View>
                        <View style={{ alignItems: 'center', width: '100%' }}>
                            <Text style={{ textAlign: 'center', color: '#000', fontSize: 23, fontWeight: '800', marginVertical: 12, textDecorationLine: 'underline' }}>1-3 Days of Processing. An agent will contact you after the said form is prepared and validated.</Text>
                        </View>
                        <View style={styles.action1}>
                            <TouchableOpacity style={styles.panelButton}
                                onPress={this.InsertRequest}>
                                <Text style={styles.panelButtonTitle}>SUBMIT</Text>
                            </TouchableOpacity>
                        </View>
                    </ScrollView>
                </View>
            </View>
        );
    }
}

const styles = StyleSheet.create({
    infoSection: {
        alignItems: 'center',
        marginTop: -15,
        marginBottom: 5,
        width: width / 1.12,
        height: height / 7,
        borderWidth: 2,
        borderRadius: 10,
        backgroundColor: '#fff',
    },
    infoSection1: {
        alignItems: 'center',
        marginTop: -15,
        marginBottom: 10,
        width: width / 1.12,
        height: height / 7,
        borderWidth: 2,
        borderRadius: 10,
        backgroundColor: '#fff',
    },



    container: {
        flex: 1,
    },
    commandButton: {
        padding: 15,
        borderRadius: 10,
        backgroundColor: '#FF6347',
        alignItems: 'center',
        marginTop: 10,
    },
    panel: {
        padding: 20,
        backgroundColor: '#FFFFFF',
        paddingTop: 20,
        // borderTopLeftRadius: 20,
        // borderTopRightRadius: 20,
        // shadowColor: '#000000',
        // shadowOffset: {width: 0, height: 0},
        // shadowRadius: 5,
        // shadowOpacity: 0.4,
    },
    header: {
        backgroundColor: '#FFFFFF',
        shadowColor: '#333333',
        shadowOffset: { width: -1, height: -3 },
        shadowRadius: 2,
        shadowOpacity: 0.4,
        // elevation: 5,
        paddingTop: 20,
        borderTopLeftRadius: 20,
        borderTopRightRadius: 20,
    },
    panelHeader: {
        alignItems: 'center',
    },
    panelHandle: {
        width: 40,
        height: 8,
        borderRadius: 4,
        backgroundColor: '#00000040',
        marginBottom: 10,
    },
    panelTitle: {
        fontSize: 27,
        height: 35,
    },
    panelSubtitle: {
        fontSize: 14,
        color: 'gray',
        height: 30,
        marginBottom: 10,
    },
    panelButton: {
        padding: 13,
        borderRadius: 10,
        backgroundColor: '#FF6347',
        alignItems: 'center',
        marginVertical: 7,
    },
    panelButtonTitle: {
        fontSize: 17,
        fontWeight: 'bold',
        color: 'white',
    },
    action: {
        flexDirection: 'row',
        marginTop: 4,
        marginBottom: 10,
        borderBottomWidth: 1,
        borderBottomColor: '#f2f2f2',
        paddingBottom: 5,
    },
    action1: {
        justifyContent: 'center',
        marginTop: 35,
        marginBottom: 10,
        borderBottomWidth: 1,
        borderBottomColor: '#f2f2f2',
        paddingBottom: 5,
    },
    action2: {
        justifyContent: 'center',
        marginTop: 35,
        marginBottom: 10,
        borderBottomWidth: 1,
        borderBottomColor: '#f2f2f2',
        paddingBottom: 5,
    },
    actionError: {
        flexDirection: 'row',
        marginTop: 10,
        borderBottomWidth: 1,
        borderBottomColor: '#FF0000',
        paddingBottom: 5,
    },
    textInput: {
        flex: 1,
        marginTop: 0,
        paddingLeft: 10,
        color: '#000',
        borderWidth: 2
    },

    textInput1: {
        marginTop: 0,
        color: '#000',
        alignItems: 'center',
    },

    infoSection1: {
        paddingLeft: 15,
        marginTop: 5,
        marginBottom: 5,
        width: width / 1.12,
        height: height / 4,
        borderWidth: 2,
        borderRadius: 10,
        backgroundColor: '#fff',
    },
});

