public class Solution {
    public int[] TwoSum(int[] nums, int target) {
        // int[] diff = new int[nums.Length]; 
        // for(int i = 0; i < nums.Length; i ++) {
        //     diff[i] = -10*10;
        // }
        // for(int i = 0; i < nums.Length; i ++) {
        //     int tmp = target - nums[i];
        //     int pos = Array.IndexOf(diff, tmp);
        //     if( pos != -1 ) { 
        //         return new int[2]{i, pos};
        //     } else {
        //         diff[i] = nums[i];
        //     }
        // }
        // return null;
        
        //Avoid using IndexOf method to search for an element in an array, as it has a time
        //complexity of O(n). Instead, you can use a dictionary to store the elements of the 
        //array as keys, and their indices as values. This way, you can lookup an element 
        //in O(1) time.

        //You can remove the first loop that initializes the diff array to a large negative
        //number. This is unnecessary, as you can simply initialize the dictionary when you 
        //need it in the second loop.

        //Use a KeyValuePair<int, int> to store the dictionary key-value pairs instead of using
        //separate arrays to store keys and values. This can make the code more concise and 
        //easier to read.

        Dictionary<int, int> dict = new Dictionary<int, int>();
        for (int i = 0; i < nums.Length; i++) {
            int complement = target - nums[i];
            if (dict.ContainsKey(complement)) {
                return new int[] { dict[complement], i };
            }
            dict[nums[i]] = i;
        }
        return null;

    }


    

}