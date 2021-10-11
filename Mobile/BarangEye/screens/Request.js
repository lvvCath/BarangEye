import React, { Component } from 'react';
import { View, StyleSheet, Modal, Text, ImageBackground, Dimensions, Animated, Easing, TouchableOpacity  } from 'react-native';
import LinearGradient from 'react-native-linear-gradient';
import { ScrollView} from 'react-native-gesture-handler';

const { width, height } = Dimensions.get('screen');

export default class Covid extends React.Component {
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
                    <ImageBackground style={styles.backgroundImage} source={require('../assets/img/Dashboard/request1.png')} />
                </Animated.View>
                <View style={{alignItems: 'center', marginVertical: 7}}>
                    <ScrollView
                        style={{ backgroundColor: '#d7e1ec' }}
                        contentContainerStyle={{ paddingBottom: 0 }}
                        scrollEnabled={false}
                        showsVerticalScrollIndicator={false}>
                            <View style={styles.infoSection}>

                            </View>
                    </ScrollView>
                </View>
                <View style={{ justifyContent: 'center', flexDirection: 'row' }}>
                    <View style={styles.imageViewHeader}>
                        <LinearGradient
                            colors={['#045de9', '#09c6f9']}
                            style={styles.imageHeader}>
                                <TouchableOpacity style={{ alignItems: 'center', marginTop: 4 }}
                                onPress={() => this.props.navigation.navigate('Modal')}>
                                    <Text style={{ fontSize: 35, color: '#000', fontWeight: '800' }}>REQUEST</Text>
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

});

