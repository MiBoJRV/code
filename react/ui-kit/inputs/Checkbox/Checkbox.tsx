import React, { useState } from 'react';
import { COLORS } from 'src/constants';
import { CheckedCheckboxIcon } from 'src/assets/icons';

type CheckboxProps = {
  label: string;
};

export const Checkbox: React.FC<CheckboxProps> = ({ label }) => {
  const [isChecked, setIsChecked] = useState<boolean>(false);
  const toggleCheckbox = () => {
    setIsChecked((prev) => !prev);
  };

  return (
    <div className="flex items-start text-left gap-4 w-full xs:w-[65%] lg:w-[55%] mt-2">
      <input
        type="checkbox"
        id="checkbox"
        className="hidden"
        checked={isChecked}
        onChange={toggleCheckbox}
      />
      <label
        htmlFor="checkbox"
        className="cursor-pointer text-label text-grey flex gap-4"
      >
        <div>
          <CheckedCheckboxIcon
            width={25}
            height={25}
            strokeColor={isChecked ? COLORS.LIGHT_BLUE : COLORS.TRASPARENT}
          />
        </div>
        {label}
      </label>
    </div>
  );
};
